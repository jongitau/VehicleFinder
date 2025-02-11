<?php

use App\Http\Controllers\ListingController;
use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//All listings - Route class handling a get html request, we can pass request and repsonse 
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing Data 
Route::post('/listings/store', [ListingController::class, 'store']);

//Show Edit form 
Route::get('/listings/{listing}/edit',[ListingController::class,'edit']);

//Update Listing...explicitly named the update route:
//Route::put('/listings/{listings}',[ListingController::class,'update']);
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update');

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');

//single listing
//Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');
