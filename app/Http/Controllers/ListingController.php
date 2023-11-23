<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::all();
        return inertia('Listing/Index',['listings'=>$listings]);
    }

    public function create()
    {
        return inertia('Listing/Create');
    }

    public function store(ListingRequest $listing)
    {
        $validatedData = $listing->validate($listing->rules());
        Listing::create($validatedData);
        
        return to_route('listing.index')->with('success','Listing was created');
    }

    public function show(Listing $listing)
    {
        return inertia('Listing/Show',['listing'=>$listing]); 
    }

    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit',['listing'=>$listing]);
    }

    public function update(ListingRequest $request,Listing $listing)
    {
        $validatedData = $request->validate($request->rules());
        $listing->update($validatedData);

        return to_route('listing.index')->with('success','Updated listing is successfully!');
        
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return to_route('listing.index')->with('success','Delete listing is successfully!');
    }
}