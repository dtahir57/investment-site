@extends('layouts.front_end')
@section('title','Forexzone | User Dashboard')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			@if(Auth::user()->pacakge_id)
			{{ Auth::user()->pacakge->package_name }}
			@else
			<h4 class="text-center">You haven't bought any <a href="{{ route('packages') }}">package</a> yet!<h4>
			@endif
		</div>
	</div>
</div>
@endsection

