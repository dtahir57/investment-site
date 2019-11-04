@extends('layouts.admin_app')

@section('title', 'Roles')

@section('style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

@endsection
@section('content')
 

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('role.create')}}" role="button" class="btn btn-success float-right">Create Role</a>
        </div>
          <div class="col-md-6">
            <h1>Manage Roles</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Role</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Roles List</h3>
            </div>
            @if(session('created'))
               <li class="alert alert-success">{{ session('created') }}</li>
            @endif
            @if(session('updated'))
               <li class="alert alert-success">{{ session('updated') }}</li>
            @endif
            @if(session('deleted'))
               <li class="alert alert-success">{{ session('deleted') }}</li>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created_at</th>
                  <th>Actions</th>
                  
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role )
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$role->name}}</td>
                  <td>{{$role->created_at}}</td>
                  
                  <td>
                  <a href="{{route('role.edit',$role->id)}}" type="button" class="btn btn-sm btn-success">Edit</a>
                  
                 <button class="btn btn-sm btn-danger remove-record" data-toggle="modal" data-url="{{route('role.destroy',$role->id)}}"
                   data-id="{{$role->id}}" data-target="#modal-danger" >Delete</button>
                   </td>
                 
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
     
    </section>
   <form class="form" method="post">
  @csrf 
  @method('DELETE')
   <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Role</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure,You want to delete role?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light remove-form-data" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light ">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
   </form>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


@endsection
@section('script')
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endsection