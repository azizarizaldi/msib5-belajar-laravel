<?php

namespace App\Http\Controllers;

class CampusController extends Controller
{
    public function index()
    {
        $data['name']           = "Sekolah Tinggi Teknologi Bandung";
        $data['website_url']    = "https://sttbandung.ac.id/";
        $data['email']          = "info@sttbandung.ac.id";
        $data['facebook_name']  = "STTBandung";
        $data['facebook_url']   = "https://www.facebook.com/sttbandung/";
        $data['instagram_name'] = "@sttbandung";
        $data['instagram_url']  = "https://www.instagram.com/sttbandung/";
        $data['twitter_name']   = "@sttbandung";
        $data['twitter_url']    = "https://twitter.com/sttbandung";
        $data['youtube_name']   = "STTBandung";
        $data['youtube_url']    = "https://www.youtube.com/channel/UC7UAhGE1LU1H2Y6hPkaoDFQ";
        $data['tiktok_name']    = "@sttbandung";
        $data['tiktok_url']     = "https://www.tiktok.com/@sttbandung";

        return view('pages.campus', compact('data'));
    }
}
