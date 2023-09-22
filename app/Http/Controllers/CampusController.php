<?php

namespace App\Http\Controllers;

class CampusController extends Controller
{
    public function index()
    {
        $data['name'] = "Tentang Kampus";
        return view('pages.campus', compact('data'));
    }
}
