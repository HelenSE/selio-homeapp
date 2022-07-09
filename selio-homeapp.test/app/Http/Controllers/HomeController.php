<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\CategoryType;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $apartments = Apartment::all();
        $categoryTypes = CategoryType::all();
        $locations = Location::all();
        return view('main', compact('locations', 'apartments', 'categoryTypes'));
    }
}
