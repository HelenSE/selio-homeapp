<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryType;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $data = [
            'usersCount' => User::all()->count(),
            'categoriesCount' => CategoryType::all()->count(),
            'locationsCount' => Location::all()->count()
        ];
        return view('admin.main.index', compact('data'));
    }
}
