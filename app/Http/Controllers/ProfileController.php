<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $data['name']           = "Aziz Arif Rizaldi";
        $data['email']          = "azardi.business@gmail.com";
        $data['university']     = "Sekolah Tinggi Teknologi Bandung";
        $data['major']          = "Teknik Informatika";
        $data['address']        = "Bandung, Jawa Barat, Indonesia.";
        $data['desc_one']       = "Full Stack Developer - GITS.ID";
        $data['desc_two']       = "Studi Independen Batch 5";
        $data['mentor']         = "Muhammad Rizki Alif Pramanarasa";
        $data['whatsapp_url']   = "https://api.whatsapp.com/send?phone=6285155336568&text=Hai%20Aziz";
        $data['github_name']    = "@azizarizaldi";
        $data['github_url']     = "https://github.com/azizarizaldi";
        $data['twitter_name']   = "@azizarizaldi";
        $data['twitter_url']    = "https://twitter.com/azizarizaldi";        
        return view('pages.profile', compact('data'));
    }
}
