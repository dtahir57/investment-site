@extends('layouts.front_end')
@section('title','Forexzone | Home Page')
@section('content')
<div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url({{asset('frontend/img/banner-slide-1.jpg')}})"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Welcome To <span>Forexzone </span></h1>
                    <p class="banner_txt">Forexzone is an online investment trading company with a vast trading experience in wealth optimization. Ever desired to trade in the financial market known as the forex market?.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                       
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url({{asset('frontend/img/banner-slide-2.jpg')}})"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Welcome To <span>Forexzone </span></h1>
                    <p class="banner_txt">Forexzone is an online investment trading company with a vast trading experience in wealth optimization. Ever desired to trade in the financial market known as the forex market?.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                       
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url({{asset('frontend/img/banner-slide-3.jpg')}})"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Welcome To <span>Forexzone </span></h1>
                    <p class="banner_txt">Forexzone is an online investment trading company with a vast trading experience in wealth optimization. Ever desired to trade in the financial market known as the forex market?.</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>100% Responsive</h4>
                        <p>Our support is available 24/7 Mondays to Saturdays to attend to you.
                        Join our telegram group chat and send a message to our group admin or send us a mail and get a respond  as fast as possible.
                        We are only a click away,chat us whenever the need arises.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Powerful Features</h4>
                        <p>Experienced traders/trainers with the forex/binary intellectual know-how <br />
                        Swift confirmation of deposit <br />
                        Fast payment of withdrawn funds by client<br />
                        Active support to attend to investors<br />
                        Protection of your personal registered details.<br />
                        Reasonable and sustainable return of invested trading capital.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Customer Support</h4>
                        <p>We have well trained and active admins to attend to you
                        Join our group chat,and message our admins and be promptly attended to.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="{{asset('frontend/img/1.jpg')}}" alt="about" class="img-responsive" style="display:none;" />
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1>ABOUT <span>US</span></h1>
                        <p class="subheading">About Forexzone.org</p>
                    </div>

                    <ul class="aboutul">
                        <li> <i class="fa fa-check"></i>FOREXZONE IS AN ONLINE INVESTMENT TRADING COMPANY WITH WIDE TRADING EXPERIENCE THAT DEALS  IN CRYPTOCURRENCIES.</li>
                        <li> <i class="fa fa-check"></i>WE PROVIDE TRAINING OPPORTUNITIES TO INDIVIDUALS TO LEARN HOW TO TRADE FOR THEMSELVES IN THE FOREX AND BINARY MARKET.</li>
                        <li> <i class="fa fa-check"></i>WE HAVE ORGANIZED TRADING MANAGEMENT PLATFORMS  FOR OUR INVESTORS TO EARN PROFITS AS LOW AS 15% AND HIGH AS 40% WITHIN THE DURATION OF 10 TO 30DAYS RESPECTIVELY .</li>
                        <li> <i class="fa fa-check"></i>WE PROVIDE SIGNALS FOR ALL OUR ESTEEMED INVESTORS .</li>
                        <li> <i class="fa fa-check"></i>WELCOME TO THE MOST LUCRATIVE TRADING PLATFORM ONLINE.</li>
                    </ul>

                    <button type="button" class="btn btn-primary slide">Learn More  <i class="fa fa-caret-right"></i> </button>


                </div>
            </div>
        </div>
    </section>


    <section id="process">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>What <span>We Do</span></h1>
                    <p class="subheading">Forex zone trades the forex and binary market,making profits for its clients.We also offer forex trading classes,manage forex/binary accounts,sell forex trading materials to interested Members
    In addition,Our experienced traders seek to deliver superior risk adjusted returns through the economic cycle by investing across a diverse range of proprietary trading models which are used on the cryptocurrencies markets.
We are a private group of experts for crypto investments.forex zone is an online crypto training/trading investment company which focus to generate profit for its clients.
We engage in various daily trades which effect the profits shared with our investors with minimal risk.Get the forex and binary training you need at forex zone</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-lightbulb-o feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Idea</a></h4>
                        <p>ForexZone as a fast growing training/trading company,we believe in  creating wealth via the Foreign exchange market and binary trading to serve as an extra source of income.Forexzone brings you the opportunity to learn and also earn.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cloud-download feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Concept</a></h4>
                        <p>The concept of Forexzone can be related to her secret cooking recipe. However we guarantee a network of feasibility and trust.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-magic feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Design</a></h4>
                        <p>Forexzone's website, was designed with a mobile friendly,easily accessible and top notch security system: that gives her investors a safe and reliable haven to help maximize earnings.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block process-block lastchild">
                    <div class="process-icon-holder">
                        <div class="process-border">
                            <span class="process-icon"><a href="#"><i class="fa fa-cog feature_icon"></i></a></span></div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="process-text-block">
                        <h4><a href="#">Develop</a></h4>
                        <p>The website was developed by a team of well experienced programmers. Our programmers are professionals and they work 24/7 to battle cyber crimes to keep your investment safe.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="testimonial">
        <div class="container">
            <div class="section-heading text-center">
                <div class="col-md-12 col-xs-12">
                    <h1>What Our <span>Client Says</span></h1>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-12 block ">
                    <div class="testimonial_box">
                        <p>So happy now as ForexZone has just paid me good project , superb place to earn and I get tips on trading from time to time.wow gracias</p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="{{asset('img/client1.png')}}" alt="user" class="img-responsive" style="border-radius:50%;height:60px"/></div>
                        <div class="user-info">
                            <h5>Engr.SESAN BALOGUN</h5>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-12 block">
                    <div class="testimonial_box">
                        <p> A friend told me about Forexzone recently, but I was scared to join,so I decided to enroll for their online Forex/binary trading and so far so good am learning more each day, thanks ForexZone</p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="{{asset('img/client2.png')}}" alt="user" class="img-responsive" style="border-radius:50%"/></div>
                        <div class="user-info">
                            <h5>TALAI AL MUHAD</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 block">
                    <div class="testimonial_box">
                        <p>I invested in Forexzone, though skeptical at first, but I have been paid after my money was used to trade.Thank you ForexZone </p>
                    </div>
                    <div class="arrow-down"></div>
                    <div class="testimonial_user">
                        <div class="user-image"><img src="{{asset('img/client3.png')}}" alt="user" class="img-responsive" style="border-radius:50%"/></div>
                        <div class="user-info">
                            <h5>OFURE  MARYLYN</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    @endsection