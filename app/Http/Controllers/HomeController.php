<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function videos()
    {
        return view('videos');
    }

    public function juegos()
    {
        return view('juegos');
    }

    public function datos()
    {
        return view('datos');
    }

    public function catalogos()
    {
        return view('catalogos');
    }
}
