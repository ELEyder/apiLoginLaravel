<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cines(){
        $cines = DB::select('call sp_getCines');
        $datos = json_encode($cines);
        return view('api', compact('datos'));
    }

    public function cine($id){
        $cine = DB::select('call sp_getCine(?)',[$id]);
        $datos = json_encode($cine);
        return view('api', compact('datos'));

    }
    
    public function cineTarifas($id){
        $tarifas = DB::select('call sp_getCineTarifas(?)',[$id]);
        $datos = json_encode($tarifas);
        return view('api', compact('datos'));

    }

    public function cinePeliculas($id){
        $peliculas = DB::select('call sp_getCinePeliculas(?)',[$id]);
        $datos = json_encode($peliculas);
        return view('api', compact('datos'));

    }

    public function peliculas($id){
        if ($id == "cartelera") {
            $peliculas = DB::select('call sp_getPeliculas(1)');
        }
        else if ($id == "estrenos") {
            $peliculas = DB::select('call sp_getPeliculas(2)');
        }
        else if (is_numeric($id)) {
            $peliculas = DB::select('call sp_getPelicula(?)',[$id]);
        }
        else {
            $peliculas = DB::select('call sp_getPelicula(999)');
        }
        $datos = json_encode($peliculas);
        return view('api', compact('datos'));

    }
}
