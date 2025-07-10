<?php

namespace App\Http\Controllers;

use App\Models\listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
    //dd($request->all());
        $formFields = $request->validate([
            'company'=> ['required',Rule::unique('listings','company')],
            'title' =>'required',
            'tags'=>'required',
            'location'=>'required',
            'email'=>'required|email',
            'website'=>'required|url',
            'description'=>'required|max:500'
        ]);

        listings::create($formFields);

        return redirect('/');
    }
    //Show Edit Form
    public function edit(listings $listing){
        //dd($listing->company);
        return view('listings.edit',['listing' => $listing]);
    }


    //Update listing data
    public function update(Request $request, listings $listing) {

        $formFields = $request->validate([
                'company'=> 'required',
                'title' =>'required',
                'tags'=>'required',
                'location'=>'required'
            ]);

            $listing->update($formFields);
        return redirect()->route('listings.show', $listing->id)
                         ->with('message', 'Listing updated successfully!');
        }

    //Delete listing data
    public function destroy(listings $listing){
        $listing->delete();
        return redirect('/')->with('message','Listing deleted successfully');
    }

}
