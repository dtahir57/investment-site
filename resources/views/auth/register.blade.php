@extends('layouts.front_end')
@section('title','Forexzone | Signup')
@section('content')
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Hi there</h2>
            </div>
        </div>
    </section>
    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row"><div class="col-md-6 col-sm-12 forms-right-icons">
            <div class="row">
            <a class="navbar-brand" href="{{ ('/') }}">
                            <img src="{{ asset('img/logo.png') }}" style="width: 70px; height: auto;">
                        </a>
            </div>
                    <div class="section-heading">
                        <h2>Sign Up With <span>Us</span></h2>
                        <p class="subheading">WE ARE GLAD TO HAVE YOU WITH US.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-laptop"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>100% Responsive</h4>
                            <p>Our support is available 24/7 Mondays to Saturdays to attend to you.
                            Join our telegram group chat and send a message to our group admin or send us a mail and get a respond  as fast as possible.
                            We are only a click away,chat us whenever the need arises.</p>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Powerful Features</h4>
                            <p>Experienced traders/trainers with the forex/binary intellectual know-how
                                Swift confirmation of deposit
                                Fast payment of withdrawn funds by client
                                Active support to attend to investors
                                Protection of your personal registered details.
                                Reasonable and sustainable return of invested trading capital.</p>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-support"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Customer Support</h4>
                            <p>We have well trained and active admins to attend to you
                            Join our group chat,and message our admins and be promptly attended to.</p>
                        </div>
                        </div>

                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Sign up now</h3>
                                <p>Fill in the form below to get instant access</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="{{route('register')}}" method="POST" class="login-form">
                            @csrf

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="First Name" aria-describedby="basic-addon1">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" name="username" id="username" class="form-control" required placeholder="User Name" aria-describedby="basic-addon1">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Email" aria-describedby="basic-addon1">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                    <input type="tel" name="phone" id="phone" class="form-control" required placeholder="Phone No." aria-describedby="basic-addon1"
                                    pattern="[0-9]*">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" name="password" id="password" class="form-control" required placeholder="Password" aria-describedby="basic-addon1">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" name="password_confirmation" id="password-confirm" required class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn">Sign me up!</button>
                            </form>
                        </div>
                    </div>

                </div>


    </section>
@endsection