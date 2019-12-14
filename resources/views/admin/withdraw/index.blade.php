@extends('layouts.admin_app')

@section('title', 'Withdraw Requests')
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
              <li class="breadcrumb-item active">Withdraw Requests</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    @if(session('accepted'))
               <li class="alert alert-success">{{ session('accepted') }}</li>
            @endif
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Of All Requests</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Invested Amount</th>
                  <th>Wallet Address</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($requests as $request)
                  <tr>
                    <td>{{$request->user->email}}</td>
                    <td>{{$request->user->invested_amount}}</td>
                    <td>{{$request->user->wallet_address}}</td>
                    <td> 
                    <a href="{{route('withdraw.accept',$request->id)}}" type="button" class="btn btn-sm btn-success">Accept</a>
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