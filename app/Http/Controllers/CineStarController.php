<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CineStarController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cines(){
        //$cines = DB:table('cine')->get();
        $cines = DB::select('call sp_getCines');
        return view('cines', compact('cines'));
    }

    public function cine($id){
        $cine = DB::select('call sp_getCine(?)',[$id]);
        $tarifas = DB::select('call sp_getCineTarifas(?)',[$id]);
        $peliculas = DB::select('call sp_getCinePeliculas(?)',[$id]);
        return view('cine', ['cine'=>$cine[0], 'tarifas'=>$tarifas, 'peliculas'=>$peliculas]);
    }
}
