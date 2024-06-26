<?php

use App\Http\Controllers\ListingController;
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


// Common resource routes.
// index - Show all listings
// show - Show signle listing
// create - Show for to create listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


// All readings ........
Route::get('/', [ListingController::class, 'index']);
//create listings form.
Route::get('/listings/create', [ListingController::class, 'create']);
// store listing Data..
Route::post('/listings', [ListingController::class, 'store']);


// single listing.
Route::get('/listings/{id}', [ListingController::class, 'show']);


// Route::get('/posts/{id}/', function($id) {
//     // dd($id);
//     return response('Posts-'.$id, 404);
// }) ->where('id', '[0-9]');

// Route::get('/search', function(Request $request){
//     // dd($request->name.' '.$request->city);
// });
