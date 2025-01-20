<?php

use App\Http\Controllers\ListingController;
use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//All listings - Route class handling a get html request, we can pass request and repsonse 
Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing Data 
Route::post('/listings/', [ListingController::class, 'store']);

//single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
