@extends('layouts.admin_app')

@section('title', 'Renew Package')
@section('style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Users</h1>
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Renew Package</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
          @if(session('renew'))
                <li class="alert alert-success">{{ session('renew') }}</li>
          @endif
          
          @if(session('package'))
                <li class="alert alert-success">{{ session('package') }}</li>
          @endif
            <div class="card-header">
              <h3 class="card-title">List Of Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->email}}</td>
                    <td>
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <p>
                                       <b>Renew Package</b>
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <form class="form-horizontal" action="{{route('client.update',$user->id,1)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-4">
                                                    <input type="email" class="form-control" id="email" value="{{$user->email}}" required name="email">
                                                    <span style="color:red">
                                                    @error('email')
                                                    <strong>{{$message}}</strong>
                                                    @enderror
                                                    </span>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Investment Amount</label>
                                                    <div class="col-sm-4">
                                                    <input type="number" class="form-control" id="amount" required placeholder="Enter Amount" name="amount"
                                                    pattern="[0-9]*">
                                                    <span style="color:red">
                                                    @error('amount')
                                                    <strong>{{$message}}</strong>
                                                    @enderror
                                                    </span>
                                                    </div>
                                                </div>

                                                <h4>Choose Package | Please Choose one Package</h4>
                                                            <hr>
                                                                <div class="card-block">
                                                                <div class="input-group skin skin-square">
                                                                        @foreach($packages as $package)
                                                                        <div class="col-lg-3 col-md-4 col-sm-6">
                                                                            <fieldset>
                                                                                <input type="checkbox" name="packages[]" value="{{ $package->package_name }}">
                                                                                <label for="role">{{ $package->package_name }}</label>
                                                                            </fieldset>
                                                                        </div>
                                                                        @endforeach
                                                                </div>
                                                                </div>
                                            </div>
                                                <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-info">Add User</button>
                                                
                                            </div>
                                                <!-- /.card-footer -->
                                        </form>    
                                    </li>
                                </ul>
                            </li>
                        </ul>
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
      <!-- /.row -->
    </section>
    
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