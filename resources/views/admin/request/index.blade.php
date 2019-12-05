@extends('layouts.admin_app')

@section('title', 'Requests')
@section('style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Requests</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Requests</li>
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
              <h3 class="card-title">List Of All Requests</h3>
            </div>
            @if(session('accepted'))
               <li class="alert alert-success">{{ session('accepted') }}</li>
            @endif
            @if(session('deleted'))
               <li class="alert alert-success">{{ session('deleted') }}</li>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Id</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                  <tr>
                    <td>{{$request->user->name}}</td>
                    <td>{{$request->user->email}}</td>
                    <td><img src="{{ asset('storage/'.$request->user->name.'/'.$request->user->image_name) }}" height="200px" width="200px"/></td>
                    <td> 
                    <a href="{{route('request.accept',$request->user->id)}}" type="button" class="btn btn-sm btn-success">Accept</a>
                    <button type="button"  class="btn btn-danger remove-record btn-sm" data-toggle="modal" data-target="#modal-danger"
                    data-url="{{route('request.destroy',$request->id)}}" data-id="{{$request->id}}">Delete</button></td>
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
      <!-- /.row -->
    </section>
    <form class="form" method="post">
  @csrf
  @method('DELETE')
   <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Request</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure,You want to delete this request?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light remove-form-data" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-light">Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

   </form>
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