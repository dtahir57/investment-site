@extends('layouts.admin_app')
@section('title', 'Add Client')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-md-6">
            <h1>Add Client</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Client</li>
            </ol>
          </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
        @if(session('package'))
                <li class="alert alert-danger">{{ session('package') }}</li>
        @endif
        @if(session('added'))
                <li class="alert alert-success">{{ session('added') }}</li>
        @endif
    <div class="card-body">
<form class="form-horizontal" action="{{route('client.store')}}" method="POST">
@csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="email" placeholder="User Email" name="email">
                      <span >
                      @error('email')
                      <strong>{{$message}}</strong>
                      @enderror
                      </span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Investment Amount</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="amount" placeholder="Enter Amount" name="amount"
                      pattern="[0-9]*">
                      <span >
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