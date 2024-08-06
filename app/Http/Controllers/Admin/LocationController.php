<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pages;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getCountries()
    {
        $menus = Menu::query()->get();
        return response()->json($menus);
    }

    public function getCities($menu)
    {
        $cities = Pages::query()->where('country_id', $menu)->get();
        return response()->json($cities);
    }
}
