{{-- @extends('layout') --}}
<x-layout>

    @include('partials._hero')
    @include('partials._search')

    {{-- <h1>{{$heading}}</h1> --}}


    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >

    {{-- @if(count($listings) == 0)
    <p>No records found</p>
    @endif --}}

    @unless (count($listings) == 0)

    @foreach ($listings as $listing)
    <x-listing-card :listing="$listing" />
    @endforeach

    @else
    <p>No Listings Found</p>
    @endunless

    </div>

</x-layout>
 