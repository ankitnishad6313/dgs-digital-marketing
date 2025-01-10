<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['controller' => HomeController::class],function(){
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/services', 'services')->name('services');
    Route::get('/social-media-marketing', 'socialMediaMarketing')->name('social-media-marketing');
    Route::get('/google-ads', 'googleAds')->name('google-ads');
    Route::get('/help-and-support', 'helpAndSupport')->name('help-and-support');
    Route::get('/influencer-marketing', 'influencerMarketing')->name('influencer-marketing');
    Route::get('/website-design', 'websiteDesign')->name('website-design');
    Route::get('/whatsapp-marketing', 'whatsappMarketing')->name('whatsapp-marketing');
    Route::get('/contact', 'contact')->name('contact');
});
