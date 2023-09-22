<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data['name'] = "Kawan";
        return view('pages.home', compact('data'));
    }
}
