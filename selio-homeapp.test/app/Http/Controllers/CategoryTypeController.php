<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\CategoryType;
use Illuminate\Http\Request;

class CategoryTypeController extends Controller
{
    public function index($id)
    {
        $category = CategoryType::query()->where('id', $id)->firstOrFail();
        $apartments = Apartment::with('categoryTypes')
            ->whereHas('categoryTypes', function($q) use ($id) {
                $q->where('category_type_id', $id);
            })
            ->get();
        return view('category_apartment', compact('category','apartments', 'id'));
    }
}
