<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// All readings ........
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// single listing.

Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function (){
//     return response('<h2>Hello Maduka-Pcm</h2>');
// });


// Route::get('/posts/{id}/', function($id) {
//     // dd($id);
//     return response('Posts-'.$id, 404);
// }) ->where('id', '[0-9]');

// Route::get('/search', function(Request $request){
//     // dd($request->name.' '.$request->city);
// });
