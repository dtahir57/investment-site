@extends('layouts.user_app')
@section('title', 'User Dashboard')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2"> 
          <div class="col-md-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      @if($user->hasRole('Verified_User'))
        <div class="col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-tag"></i> Package Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            @if($user->package !=null)
             <span><b>Package Name: </b></span>{{$user->package->package_name}}<br>
             <span><b>Package Started_At: </b></span>{{$user->package_started_at}}<br>
             <span><b>Net Profit: </b></span>{{$user->package->net_profit}}<br>
             <span><b>Renewal Time: </b></span>{{$user->package->renewal_time}}<br>
             <span><b>Referral Bonus: </b></span>{{$user->package->referral_bonus}}<br>
            @else
            <span><b>No package bought yet</b></span>
            @endif
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-user"></i> User Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <span><b>Name: </b></span>{{$user->name}}<br>
             <span><b>Email: </b></span>{{$user->email}}<br>
             <span><b>Invested Amount: </b></span>{{$user->invested_amount}}<br>
             <span><b>Wallet Address: </b></span>{{$user->wallet_address}}<br>
            </div>
        @if($date == $user->package_started_at)
                <div class="card-footer">
                <a href="{{route('user.withdraw',$user->id)}}" type="button" class="btn btn-info float-right">Withdraw</a>
                </div>
                <!-- /.card-footer -->
        @endif
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
    @elseif($user->request != null)
    <div class="col-6" style="margin-left:300px">
          <div class="card" >
            <div class="card-header">
              <h3 class="card-title">Message</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            Your request have been submitted.Please wait......
            </div>
            <!-- /.card-body -->
          </div>
        </div>
    </div>
     @else
     <div class="col-6" style="margin-left:300px">
          <div class="card" >
            <div class="card-header">
              <h3 class="card-title">Please fill in the form below to help us verify your identity.</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('user.upload',$user->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PATCH')
					@error('image')
					<span class="invalid-feedback" role="alert">
					<strong style="color:red">{{ $message }}</strong>
					</span>
					@enderror
				<div class="form-group row">
                    <div class="col-sm-4"> 
                      <input type="file"  id="image" name="image" accept="image/*">
                    </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Submit</button>
                  
                </div>
				</form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
    </div>
    
      @endif
      <!-- /.row -->
    </section>

</body>
</html>
@endsection