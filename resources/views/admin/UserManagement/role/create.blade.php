@extends('layouts.admin_app')
@section('title', 'Role')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('role.index')}}" role="button" class="btn btn-success float-right">Show All</a>
        </div>
          <div class="col-md-6">
            <h1>Create Role</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('role.index')}}">Role</a></li>
              <li class="breadcrumb-item active">Create Role</li>
            </ol>
          </div>
    </section>

    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
        <form class="form-horizontal" action="{{route('role.store')}}" method="POST">
            @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="name" placeholder="Role Name" required name="name">
                      <span style="color:red">
                      @error('name')
                      <strong>{{$message}}</strong>
                      @enderror
                      </span>
                    </div>
                  </div>
                </div>
                    <h4>Assign Permission | Please Choose at least one Permission</h4>
                            <hr>
                    <div class="card-block">
                    <div class="input-group skin skin-square">
                        @foreach($permissions as $permission)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                          <fieldset>
                          <input  type="checkbox" name="permissions[]" value="{{$permission->name}}">
                          <label for="permission">{{$permission->name}}</label>
                          </fieldset>
                        </div>
                        @endforeach
                       
                    </div>
                    </div>
                
                 
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Add Role</button>
                  
                </div>
                <!-- /.card-footer -->
        </form>

        </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
