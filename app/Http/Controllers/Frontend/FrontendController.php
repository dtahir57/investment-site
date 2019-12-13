<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
	public function index()
    {
        return view('Frontend.index');
    }

    public function packages()
    {
    	$package1 = Package::where('package_type', 1)->first();
    	$package2 = Package::where('package_type', 2)->first();
    	$package3 = Package::where('package_type', 3)->first();
    	$package4 = Package::where('package_type', 4)->first();
    	$package5 = Package::where('package_type', 5)->first();
    	return view('Frontend/packages', compact('package1', 'package2', 'package3', 'package4', 'package5'));
	}
	public function contact()
    {
        return view('Frontend.contact');
	}

	public function about()
    {
        return view('Frontend.about');
	}
	
	public function privacy()
    {
        return view('Frontend.privacy');
	}
}
