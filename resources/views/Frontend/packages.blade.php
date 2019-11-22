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
                                <p class="subheading">Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum ea utamur impetus fuisset nam nostrud euismod volumus ne mei.</p>
                            </div>
                            <div class="row" style="margin-top:30px;" alig-content="center">
                                <div class="wpb_column vc_column_container col-sm-2 block grow ">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true">
                                                <div class="pricing-plan-head pricing-plan-1">
                                                    <h3>Weekly <br> Package</h3>
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
                                                    <a href="{{ route('coinbase.package1') }}" class="button color-5"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('package1-form').submit();">Buy Now</a>
                                                    <form id="package1-form" action="{{ route('coinbase.package1') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
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
                                                    
                                                    <h3>Monthly <br> Package</h3>
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
                                                    <a href="{{ route('coinbase.package2') }}" class="button color-5"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('package2-form').submit();">Buy Now</a>
                                                    <form id="package2-form" action="{{ route('coinbase.package2') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
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
                                                    
                                                    <h3>Forex Account Management</h3>
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
                                                    <a href="{{ route('coinbase.package3') }}" class="button color-5"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('package3-form').submit();">Buy Now</a>
                                                    <form id="package3-form" action="{{ route('coinbase.package3') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
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
                                                    
                                                    <h3>VIP Trading Signals</h3>
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
                                                    <a href="{{ route('coinbase.package4') }}" class="button color-5"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('package4-form').submit();">Buy Now</a>
                                                    <form id="package4-form" action="{{ route('coinbase.package4') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
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
                                                    <h3>Personal Training</h3>
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
                                                    <a href="{{ route('coinbase.package5') }}" class="button color-5"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('package5-form').submit();">Buy Now</a>
                                                    <form id="package5-form" action="{{ route('coinbase.package5') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
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