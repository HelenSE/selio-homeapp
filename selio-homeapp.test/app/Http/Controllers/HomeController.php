<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use App\Models\Location;
use App\Models\Apartment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $locations = Location::all();
        $categoryTypes = CategoryType::all();
        $apartments = Apartment::all();

        $popularApartments = Apartment::all();

        return view('main', compact('locations', 'categoryTypes', 'apartments', 'popularApartments'));
    }
}
