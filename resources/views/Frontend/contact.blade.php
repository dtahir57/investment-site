@extends('layouts.front_end')
@section('title','Forexzone | Contact Us')
@section('content')
<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Contact</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Home<span class="sep"> / </span><span class="current">Contact</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                @if(session('sent'))
                <li class="alert alert-success">{{ session('sent') }}</li>
                @endif
                <h2>Drop your <span>Message</span></h2>
                <p class="subheading">Hello! We know you have questions' send in all your inquiries and complaints and we would gladly reply back within 24-48 hours of receiving your request . Be rest assured we are always available</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{route('message')}}">
                @csrf
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" required class="form-control">
                            <span style="color:red">
                            @error('name')
                            <strong>{{$message}}</strong>
                            @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" required class="form-control">
                            <span style="color:red">
                            @error('email')
                            <strong>{{$message}}</strong>
                            @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" required class="form-control">
                            <span style="color:red">
                            @error('phone')
                            <strong>{{$message}}</strong>
                            @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" required class="form-control">
                            <span style="color:red">
                            @error('subject')
                            <strong>{{$message}}</strong>
                            @enderror
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                            <span style="color:red">
                            @error('message')
                            <strong>{{$message}}</strong>
                            @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-default submit-button">Submit Message <i class="fa fa-caret-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection