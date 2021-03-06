@extends('layouts.admin_app')
@section('title','User')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-md-12">
            <a href="{{route('user.index')}}" role="button" class="btn btn-success float-right">Show All</a>
        </div>
          <div class="col-md-6">
            <h1>Edit User</h1>
          </div>
          
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('user.index')}}">User</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <form method="POST" action="{{ route('user.update',$user->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                                <input id="username" type="text"  value="{{$user->username}}" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
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
                                <input id="phone" type="text"  value="{{$user->phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone" pattern="[0-9]*" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
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
                                <input id="email" type="email"  value="{{$user->email}}"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span style="color:red">
                                     @error('email')
                                     <strong>{{$message}}</strong>
                                     @enderror
                                 </span>
                               
                            </div>
                        </div>
                        <h4>Assign Roles | Please Choose at least one Role</h4>
                            <hr>
                                <div class="card-block">
                                <div class="input-group skin skin-square">
                                                    @foreach($roles as $role)
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <fieldset>
                                                            <input type="checkbox" name="roles[]" value="{{ $role->name }}" @if($user->hasRole($role)) checked @endif>
                                                            <label for="role">{{ $role->name }}</label>
                                                        </fieldset>
                                                    </div>
                                                    @endforeach
                                </div>
                                </div>
                        <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    Edit User
                                </button>
                        </div>
                        </div>
                        </div>
                        

            </form>

            
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
