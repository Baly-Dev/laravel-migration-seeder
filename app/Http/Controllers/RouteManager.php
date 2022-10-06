<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class RouteManager extends Controller
{
    public function home(){
        return view('home');
    }

    public function trains(){
        $trains = Train::all();
        return view('trains', compact('trains'));
    }

    public function about_us(){
        return view('about_us');
    }

    public function blog(){
        return view('blog');
    }

}
