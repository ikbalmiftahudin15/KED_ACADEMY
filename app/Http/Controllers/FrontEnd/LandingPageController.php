<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function getlayanan(){
        return view('guest.layanan-page');
    }

    public function getkursus(){
        return view('guest.kursus-page');
    }

    public function gettim(){
        return view('guest.tim-page');
    }

    public function getacara(){
        return view('guest.acara-page');
    }

    public function getkontak(){
        return view('guest.kontak-page');
    }
}
