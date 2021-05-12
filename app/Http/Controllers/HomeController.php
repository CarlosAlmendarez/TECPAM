<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;
use App\Datos;
use App\Enlaces;
use App\Videos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $videos = videos::all();

        return view('videos')->with("videos",$videos);
    }

    public function juegos()
    {
        return view('juegos');
    }

    public function datos()
    {
        $datos = datos::all();
        $cont = count($datos);
        $c = 0;
        return view('datos')->with("datos",$datos)->with("cont",$cont)->with("c",$c);
    }

    public function datosG(Request $request, $id)
    {
        $datos = datos::all();
        $cont = count($datos);
        $c = $id + 1;
        if( $c >= $cont)
        {
            $c=0;
        }
        return view('datos')->with("datos",$datos)->with("cont",$cont)->with("c",$c);
    }

    public function catalogos()
    {
        $catalogos = Enlaces::all();

        return view('catalogos')->with("catalogos",$catalogos);
    }
}
