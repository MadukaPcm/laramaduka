<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // List of all Listings.
    public function index (){
        // dd(request());

        return view('listings.index', [
            // 'listings' => Listing::all()
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show($id){
        $listing = Listing::find($id);

        if($listing){
            return view('listings.show', [
                'listing' => $listing
            ]);
        }else{
            abort('404');
        }
    }

    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formField = $request->validate([
            'title'=>'required',
            'company'=>['required', Rule::unique('listing','company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required'
        ]);

        return redirect('/');
    }
}
