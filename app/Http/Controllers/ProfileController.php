<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $data['name'] = "Profil";
        return view('pages.profile', compact('data'));
    }
}
