<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function blogs(){
        return view('blogs');
    }
    public function services(){
        return view('services');
    }
    public function googleAds(){
        return view('google-ads');
    }
    public function helpAndSupport(){
        return view('help-and-support');
    }
    public function whatsappMarketing(){
        return view('whatsapp-marketing');
    }
    public function websiteDesign(){
        return view('website-design');
    }
    public function influencerMarketing(){
        return view('influencer-marketing');
    }
    public function socialMediaMarketing(){
        return view('social-media-marketing');
    }
    public function contact(){
        return view('contact');
    }
}
