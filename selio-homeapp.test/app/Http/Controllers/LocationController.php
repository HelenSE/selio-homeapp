<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\CategoryType;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index($id){
        $location = Location::query()->where('id', $id)->firstOrFail();
        $apartments = Apartment::with('location')
            ->where('location_id', $location->id)
            ->get();


        return view('location_apartment', compact('apartments', 'location', 'id'));
    }
}
