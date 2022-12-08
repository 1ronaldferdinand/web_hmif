<?php

namespace App\Http\Controllers;

use App\Models\DivisiListModel;
use App\Models\NavbarListModel;
use App\Models\ArtikelListModel;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $divisi_list = DivisiListModel::all();
        $navbar_list = NavbarListModel::all();
        $artikel_list = ArtikelListModel::where('artikel_status', '0')->orderby('artikel_created_at', 'desc')->get();

        return view('home/index', compact('divisi_list', 'navbar_list', 'artikel_list'));
    }
}
