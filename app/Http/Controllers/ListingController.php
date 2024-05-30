<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // List of all Listings.
    public function index (){
        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }

    public function show($id){
        $listing = Listing::find($id);

        if($listing){
            return view('listing', [
                'listing' => $listing
            ]);
        }else{
            abort('404');
        }  
    }
}
