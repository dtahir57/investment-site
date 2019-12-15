@extends('layouts.front_end')
@section('title','Forexzone | Packages')
@section('content')
<section id="features-page">
        <!--pricing-->
        <div class="subsection4">
            <div class="container">
                <div class="col span_12">
                    <div class="col-sm-12 wpb_column column_container">
                        <div class="wpb_wrapper">
                            <div class="section-heading text-center">
                                <h1>Our <span>Plans</span></h1>
                                <p class="subheading">OUR PLANS ARE FLEXIBLE : FOR THOSE WHO WOULD LIKE TO ENGAGE IN OUR INVESTMENT PLATFORM PRIOR TO WHEN THEY START TRADING  INDEPENDENTLY,THESE ARE THE PERCENTAGE PROFITS WE OFFER FROM THE FOREX/BINARY MARKET .</p>
                            </div>
                            <div class="row" style="margin-top:30px;" alig-content="center">
                                <div class="wpb_column vc_column_container col-sm-2 block grow ">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true">
                                                <div class="pricing-plan-head pricing-plan-1">
                                                    <!-- <h3>Weekly <br> Package</h3> -->
                                                    <h3>{{ $package1->package_name }}</h3>
                                                    <div class="pricing-price">
                                                        <span class="pricing-amount">15%</span>
                                                        <span class="pricing-per">after 10 days</span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Min Investment</strong> $50</li>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Max Investment</strong>  $30,000</li>
                                                    <li><strong style="font-size:12px">Wait Time</strong style="font-size:13px"> <br>10 Days</li>
                                                    <li><strong style="font-size:12px">Referral Bonus</strong style="font-size:13px"> 3%</li>
                                                    <li><strong style="font-size:12px">No Trading <br> Material</strong> </li>
                                                    <!-- <li><strong>Basic</strong> Stats</li> -->
                                                </ul>
                                                <div class="pricing-signup">
                                                    <a href="" class="button color-5">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container col-sm-2 block grow">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true ">
                                                <div class="pricing-plan-head pricing-plan-2">
                                                    <h3>{{ $package2->package_name }}</h3>
                                                    <!-- <h3>Monthly <br> Package</h3> -->
                                                    <div class="pricing-price">
                                                        <span class="pricing-amount">40%</span>
                                                        <span class="pricing-per">after 30 days</span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Min Investment</strong> $100</li>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Max Investment</strong> $50,000</li>
                                                    <li><strong style="font-size:12px">Wait Time</strong> <br>30 Days</li>
                                                    <li><strong style="font-size:12px">Referral Bonus</strong> 3%</li>
                                                    <li><strong style="font-size:12px">No  Trading <br> Material</strong> </li>
                                                    <!-- <li><b>Complex</b>&nbsp;Stats</li> -->
                                                </ul>
                                                <div class="pricing-signup">
                                                    <a href="" class="button color-5">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container col-sm-2 block grow">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true ">
                                                <div class="pricing-plan-head pricing-plan-1">
                                                    <h3>{{ $package3->package_name }}</h3>
                                                    <!-- <h3>Forex Account Management</h3> -->
                                                    <div class="pricing-price">
                                                        <span class="pricing-amount">$500</span>
                                                        <span class="pricing-per">per six months</span>
                                                    </div>
                                                </div>
                                                <ul>
                                                <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Min Investment</strong> $1000</li>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Max Investment</strong> $10,000</li>
                                                    <li><strong style="font-size:12px">Profit</strong> <br>10-50% Monthly</li>
                                                    <li><strong style="font-size:12px">Support</strong> 24/7</li>
                                                    <li><strong style="font-size:12px">Free Trading Material</strong> </li>
                                                    <!-- <li><b>Complex</b>&nbsp;Stats</li> -->
                                                </ul>
                                                <div class="pricing-signup">
                                                    <a href="https://commerce.coinbase.com/checkout/8d373850-4d83-4032-a3aa-e38ad7d547b1" class="button color-5">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container col-sm-2 block grow">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true ">
                                                <div class="pricing-plan-head pricing-plan-2">
                                                    <h3>{{ $package4->package_name }}</h3>
                                                    <!-- <h3>VIP Trading Signals</h3> -->
                                                    <div class="pricing-price">
                                                        <span class="pricing-amount">$100</span>
                                                        <span class="pricing-per">monthly</span>
                                                    </div>
                                                </div>
                                                <ul>
                                                <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Min Investment</strong> $0</li>
                                                    <li><img src="{{asset('img/download.png')}}" style="width:15px;height:15px;margin-right:5px;"><strong style="font-size:12px">Max Investment</strong> Unlimited</li>
                                                    <li><strong style="font-size:12px">Signals</strong><br> 3(Daily)</li>
                                                    <li><strong style="font-size:12px">Support</strong> 24/7</li>
                                                    <li><strong style="font-size:12px">Training Sessions</strong> Every Sunday</li>
                                                    
                                                    <!-- <li><b>Complex</b>&nbsp;Stats</li> -->
                                                </ul>
                                                <div class="pricing-signup">
                                                    <a href="https://commerce.coinbase.com/checkout/44b98546-a8de-4067-9517-21bc534221da" class="button color-5">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container col-sm-2 block grow ">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true">
                                                <div class="pricing-plan-head pricing-plan-1">
                                                    <!-- <h3>Personal Training</h3> -->
                                                    <h3>{{ $package5->package_name }}</h3>
                                                    <div class="pricing-price">
                                                        <span class="pricing-amount">$200</span>
                                                        <span class="pricing-per"></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li><strong style="font-size:12px">Support</strong> 24/7</li>
                                                    <li><strong style="font-size:12px">Free Trading Material</strong></li>
                                                   
                                                    <!-- <li><strong>Basic</strong> Stats</li> -->
                                                </ul>
                                                <div class="pricing-signup">
                                                    <a href="https://commerce.coinbase.com/checkout/e55b61a1-ba1e-4f35-8c3f-214f09ecdfda" class="button color-5">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection