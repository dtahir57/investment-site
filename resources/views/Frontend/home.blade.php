[@extends('layouts.user_app')
@section('title', 'User Dashboard')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
    @if(session('withdraw'))
               <li class="alert alert-success">{{ session('withdraw') }}</li>
    @endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
    @if($user->request == null && $user->hasRole('Verified_User'))
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
             <span><b>Withdrawal Date: </b></span>{{$user->withdraw_date}}<br>
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
             <span><b>Invested Amount: </b></span>{{$user->invested_amount}}<strong>$</strong><br>
             <!-- JLpl3x -->
            </div>
          </div>
        @if($date == $user->package_started_at)
          @if($user->request == null)
                <div class="card-footer">
                <button type="button"  class="btn btn-primary float-right" id="wallet" data-toggle="modal" data-target="#modal-primary"
                data-id="{{$user->id}}" base-url="{{env('APP_URL',false)}}" data-url="/withdraw/update">Withdraw</button>
                </div>
          @endif
        @elseif($date != $user->withdraw_date)
          @if($user->request == null)
                <div class="card-footer">
                <button class="btn btn-primary float-right" style="opacity:0.4">Withdraw</button>
                </div>
          @endif
        @endif
                <!-- /.card-footer -->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
    @elseif($user->request != null)
          @if($user->request->type == "verification")
          <div class="col-6" style="margin-left:300px">
                <div class="card" >
                  <div class="card-header">
                    <h3 class="card-title">Message</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  Verification request sent.Please wait for approval.
                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
          @endif  
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
				<div class="form-group row">
                    <div class="col-sm-4"> 
                      <input type="file"  id="image" name="image" accept="image/*">
                    </div>
                    <span style="color:red">
                      @error('image')
                      <strong>{{$message}}</strong>
                      @enderror
                      </span>
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
      @if($user->request != null)
          @if($user->request->type == "withdraw")
          <div class="col-6" style="margin-left:300px">
                <div class="card" >
                  <div class="card-header">
                    <h3 class="card-title">Message</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  Withdraw request sent.
                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
          @endif
    @endif
    </section>


<form class='withdraw-form' method='post'>
  @csrf
  @method('PATCH')
<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Wallet Address</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="address" placeholder="Enter Wallet Address" name="address">
                    </div>
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-outline-light">Submit</button>
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
<script src="{{asset('js/wallet.js')}}"></script>
@endsection