<?php

namespace App\Http\Controllers;

use App\Models\listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index',[
            'listings' => listings::all()
            //(request(['search']))->get()
            ]);
    }

    //show single listing
    public function show(listings $listing){
        return view('listings.show',[
            'listing' => $listing
        ]);     
    }

    //Show create Form
    public function create(){
        return view('listings.create');
    }

    //Store listing data
    public function store(Request $request) {
        dd($request->all);
    }
}