@extends('layouts.admin_app')
@section('title', 'Permission')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('permission.index')}}" role="button" class="btn btn-success float-right">Show All</a>
        </div>
          <div class="col-md-6">
            <h1>Create Permission</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('permission.index')}}">Permission</a></li>
              <li class="breadcrumb-item active">Create Permission</li>
            </ol>
          </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
    <div class="card-body">
        <form class="form-horizontal" action="{{route('permission.store')}}" method="POST">
        @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="name" placeholder="Permission Name" name="name">
                      <span >
                      @error('name')
                      <strong>{{$message}}</strong>
                      @enderror
                      </span>
                    </div>
                  </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add Permission</button>
                  
                </div>
                <!-- /.card-footer -->
        </form>
    </div>
          
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection