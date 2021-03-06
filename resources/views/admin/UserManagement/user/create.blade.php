@extends('layouts.admin_app')
@section('title','User')
@section('content')
 <!-- Horizontal Form -->
 <div class="">
 <section class="content-header ">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('user.index')}}" role="button" class="btn btn-success float-right">Show All</a>
        </div>
          <div class="col-md-6">
            <h1>Create User</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('user.index')}}">User</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div>
        
     
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <div class="card-body">
            <form method="POST" action="{{ route('user.store') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <span style="color:red">
                                     @error('name')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                <span style="color:red">
                                     @error('username')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                pattern="[0-9]*">
                                <span style="color:red">
                                     @error('phone')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span style="color:red">
                                     @error('email')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <span style="color:red">
                                     @error('password')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                           
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <h4>Assign Roles | Please Choose at least one Role</h4>
                            <hr>
                                <div class="card-block">
                                <div class="input-group skin skin-square">
                                                    @foreach($roles as $role)
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <fieldset>
                                                            <input type="checkbox" name="roles[]" value="{{ $role->name }}"/>
                                                            <label for="role">{{ $role->name }}</label>
                                                        </fieldset>
                                                    </div>
                                                    @endforeach
                                                </div>
                                </div>
                                </div>
                        <div class="card-footer">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        </div>
                        

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