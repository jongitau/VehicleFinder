<?php

use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//All listings
Route::get('/', function () {
    return view('listings',[
    'heading' => 'Lastest Listings',
    'listings' => listings::all()
    ]);
});

//single listing
Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listings' => listings::find($id)
    ]);
});

