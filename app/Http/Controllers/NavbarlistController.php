<?php

namespace App\Http\Controllers;

use App\Models\NavbarListModel;
use Illuminate\Http\Request;

class NavbarlistController extends Controller
{
    public function index()
    {
        $navbar_list = NavbarListModel::all();
        return response()->json($navbar_list);
    }
}
