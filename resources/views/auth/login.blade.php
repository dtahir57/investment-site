@extends('layouts.front_end')
@section('title','Forexzone | Login')
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
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                <div class="row">
                        <a class="navbar-brand" href="{{ ('/') }}">
                            <img src="{{ asset('img/logo.png') }}" style="width: 70px; height: auto;">
                        </a>
                </div>
                    <div class="section-heading">
                        <h2>Sign In With <span>Us</span></h2>
                        <p class="subheading">Hello! Welcome back to Forexzone WE ARE HAPPY to have you back : Kindly fill in your details to access your profile area.</p>
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
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        
                        <div class="form-bottom">
                            <form role="form" action="{{route('login')}}" class="login-form" method="POST">
                            @csrf
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div style="margin-top:-10px;margin-bottom:10px">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                            </form>
                        </div>
                    </div>
                    

                   
                </div>

    </section>
@endsection