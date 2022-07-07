<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\CategoryType;
use App\Models\Location;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index($id)
    {
        $apartment = Apartment::query()->findOrFail($id);
        $apartments = Apartment::all();
        $categoryTypes = CategoryType::all();
        $locations = Location::all();
        return view('property_single', compact('id', 'apartment', 'apartments', 'locations', 'categoryTypes'));
    }

    public function show()
    {
        $apartments = Apartment::query()->simplePaginate(9);
        $categoryTypes = CategoryType::all();
        $locations = Location::all();

        return view('main', compact('apartments', 'categoryTypes', 'locations'));
    }
}
