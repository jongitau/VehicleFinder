<?php

use App\Http\Controllers\ListingController;
use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//All listings - Route class handling a get html request, we can pass request and repsonse
Route::get('/', [ListingController::class, 'index'])->name('landing');

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->name('listings.create');

//Store listing Data
Route::post('/listings/store', [ListingController::class, 'store'])->name('listings.store');

//Show Edit form
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->name('listings.edit');

//Update Listing...explicitly named the update route:
//Route::put('/listings/{listings}',[ListingController::class,'update']);
Route::put('/listings/{listing}', [ListingController::class, 'update'])->name('listings.update');

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->name('listings.destroy');

//single listing
//Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/listings/{listing}', [ListingController::class, 'show'])->name('listings.show');

Route::get('/artisan', function (Request $request) {
    // This is just a placeholder for any artisan commands you might want to run
    return 'Artisan commands can be run here.';
})->name('artisan');
