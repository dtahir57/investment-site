@extends('layouts.user_app')
@section('title',"Forexzone | User Profile | $user->name")
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img  src="{{env('APP_URL')}}/profiles/{{($user->username)}}/{{$user->profile_pic}}" height="150px" width="150px" style="border-radius: 50%;"/>
                </div>
                <h3 class="profile-username text-center">{{ucfirst($user->name)}}</h3>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-pencil-alt mr-1"></i>Name</strong>
                <p class="text-muted float-right" >
					        {{ucfirst($user->name)}}
                </p>

                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i>Username</strong>
                <p class="text-muted float-right">
					        {{ucfirst($user->username)}}
                </p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i>Phone</strong>

                <p class="text-muted float-right">
			          	{{$user->phone}}
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Edit</a></li>
                </ul>
                @if(session('updated'))
               		<li class="alert alert-success">{{ session('updated') }}</li>
            	  @endif
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane  active" id="settings">
                    <form action="{{route('user.profile.update',$user->id)}}" class="form-horizontal" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" required name="name" value="{{Auth::user()->name}}">
                          <span style="color:red">
                          @error('name')
                          <strong>{{$message}}</strong>
                          @enderror
                      	</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" required name="username"value="{{Auth::user()->username}}">
                          <span style="color:red">
                          @error('username')
                          <strong>{{$message}}</strong>
                          @enderror
                      	</span>
                        </div>
                      </div>
                      <div class="form-group row">
                         <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" required name="phone" value="{{Auth::user()->phone}}">
                              <span style="color:red">
                              @error('phone')
                              <strong>{{$message}}</strong>
                              @enderror
                              </span>
                            </div>
                      </div>
                      <div>
                      <label>
                      Select Image</label>
                      <input id="files" name="image"  type="file">
                      @error('image')
                      <strong>{{$message}}</strong>
                      @enderror
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection