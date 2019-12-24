<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend/scss/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/scss/skin.css')}}">
    @yield('style')
    
    <style type="text/css">
        .dropdown-item {
            display: block;
            height: 40px;
            padding: 0px;
            line-height: 0px;
            padding: 15px;
        }
    </style>
</head>
<body id="wrapper">
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed scroll" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			  </button>
                        <a class="navbar-brand" href="{{ ('/') }}">
                            <img src="{{ asset('img/logo.png') }}" style="width: 70px; height: auto;">
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="nav-link {{(Request::is('/') ? 'active' : '')}}"><a href="{{route('main')}}" >Home</a></li>
                            <li class="nav-link {{(Request::is('packages') ? 'active' :'')}}"><a href="{{route('packages')}}">Packages</a></li>
                            <li class="nav-link {{(Request::is('contact') ? 'active' : '')}}"><a href="{{route('contact')}}">Contact</a></li>
                            <li class="nav-link {{(Request::is('about') ? 'active' : '')}}"><a href="{{route('about')}}">About</a></li>
                            
                            @guest
                            <li class="nav-link {{(Request::is('login') ? 'active' : '')}}"><a href="{{route('login')}}">Sign In</a></li>
                            <li class="nav-link {{(Request::is('register') ? 'active' : '')}}"><a href="{{route('register')}}">Sign Up</a></li>
                            @else 
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown"  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu"  aria-labelledby="navbarDropdown" >
                                @if(Auth::user()->hasRole('Super_User'))
                                <a class="dropdown-item" href="{{route('home')}}" >
                                    {{ __('Dashboard') }}   
                                    </a>
                                @else
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}" >
                                    {{ __('Dashboard') }}   
                                    </a>
                                @endif
                                @if(Auth::user()->hasRole('Verified_User'))
                                    <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                                    {{ __('Profile') }}  
                                    </a>
                                @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    <!--/.nav-ends -->
    @yield('content')
    <section id="footer">
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Address</h4>
                        <hr/>
                        <ul class="footer-links">
                           <p>For inquiries and support contact us at,</p>
                           <p>Forbes Street,SEL Glasgow UK</p>
                           <p><strong>Email us: </strong><a href="mailto:support@forexzone.org">support@forexzone.org</a></p>
                           <p> <strong>Hotline: </strong><span>+441415360017</span></p>
                           <p></p>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Useful Links</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="{{route('main')}}">Home</a></li>
                            <li><a href="{{route('packages')}}">Packages</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Community</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Free Goods</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Recent Posts</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>
                                No recent posts
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Find us on</h4>
                        <hr/>
                        <ul class="footer-links" style="margin-top:-10px">
                            <a href="https://www.instagram.com/invites/contact/?i=xaf4dsv5gtdk&utm_content=c2l35wf"><img src="{{asset('frontend/img/insta.png')}}" style="width:9%;height:9%" alt="Instagram"></a>
                            &nbsp &nbsp<a href="https://m.facebook.com/Forexzonehub-111334363695689/?ref=bookmarks"><img src="{{asset('frontend/img/facebook.png')}}" style="width:9%;height:9%" alt="Facebook"></a>
                            &nbsp &nbsp<a href="https://t.me/Officialforexzone"><img src="{{asset('frontend/img/telegram.png')}}" style="width:9%;height:9%;margin-top:2%" alt="Telegram"></a>
                            &nbsp &nbsp &nbsp<a href="http://www.linkedin.com/in/forex-zone"><img src="{{asset('frontend/img/linkedin.png')}}" style="width:9%;height:9%" alt="Linkedin"></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                    <a href="{{route('privacy')}}">Privacy Policy</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                    All rights reserved by <a href="#">Forexzone Investment Company</a>
                </div>
            </div>
        </div>
    </section>

    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>
</body>
    @yield('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('frontend/script/index.js')}}"></script>
</html>