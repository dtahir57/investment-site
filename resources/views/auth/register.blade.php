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
                                <p>Please select a package and complete payment you will recieve a email with login info shortly after payment.</p>

                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <a href="{{route('packages')}}" type="submit" class="btn">Get your package</a>
                        </div>
                    </div>

                </div>


    </section>
@endsection