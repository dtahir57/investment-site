@extends('layouts.front_end')
@section('title','Forexzone | User Dashboard')
@section('style')

@endsection
@section('content')
<section id="features-page">
        <!--pricing-->
        <div class="subsection4">
            <div class="container">
                <div class="col span_12">
				@if($user->hasRole('Verified_User'))
				Welcome to dashboard
				@elseif($user->request != null)
				<div class="col-sm-12 wpb_column column_container">
                        <div class="wpb_wrapper">
                            <div class="row" style="margin-top:30px;" alig-content="center">
                                <div class="wpb_column vc_column_container col-sm-6 block grow" style="margin-left:290px;">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true ">
                                                <div class="pricing-plan-head pricing-plan-2">
                                                    <h3>Message</h3>
                                                </div>
                                                <div class="pricing-signup">
												<p> <strong>Your request have been submitted.Please wait......</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                </div>
				@else
                    <div class="col-sm-12 wpb_column column_container">
                        <div class="wpb_wrapper">
                            <div class="section-heading text-center">
                                <h5>please fill in the form below to help us verify your identity.</h5>
                               </div>
                            <div class="row" style="margin-top:30px;" alig-content="center">
                               
                                <div class="wpb_column vc_column_container col-sm-6 block grow" style="margin-left:290px;">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="pricing-plan pricing-color-true ">
                                                <div class="pricing-plan-head pricing-plan-2">
                                                    <h3>Confirm Your Identity</h3>
													
                                                </div>
                                                <div class="pricing-signup">
												<form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
												@csrf
												@method('PATCH')
												@error('image')
													<span class="invalid-feedback" role="alert">
														<strong style="color:red">{{ $message }}</strong>
													</span>
												@enderror
												<input type="file" name="image" accept="image/*">
												<input type="submit"  class="btn" value="Submit">
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
				@endif
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection