<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\CategoryType;
use App\Models\Location;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index($id){
        $apartment = Apartment::query()->findOrFail($id);
        $apartments = Apartment::all();

        $categoryTypes = CategoryType::all();
        $categoryType = CategoryType::query()->findOrFail($id);

        return view('property_single', [
            'apartment' => $apartment,
            'apartments' => $apartments,
            'categoryTypes' => $categoryTypes,
            'categoryType' => $categoryType
        ]);
    }
//    public function show($slug, $id)
//    {
//        $apartment = Apartment::with('categoryTypes', 'location')->where('slug', $slug)->where('id', $id)->firstOrFail();
//
//        $relatedApartment = Apartment::with('category_types')->where('location_id', $apartment->location_id)->where('id', '!=', $apartment->id)->take(3)->get();
//
//        return view('main', compact('apartment', 'relatedApartment'));
//    }
}
