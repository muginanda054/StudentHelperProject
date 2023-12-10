<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function donasi(){
        return view('donasi');
    }

    public function donasiselesai(){
        return view('donasiselesai');
    }

    public function akunUser(){
        return view('akunUser');
    }

    public function posting(){
        return view('postingdonasi');
    }
}
