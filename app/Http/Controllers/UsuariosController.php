<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Alumno;

class UsuariosController extends Controller
{
    function listar(){
        
        $alumnos = Alumno::orderBy('edad', 'DESC')
            ->get();
        //dd ($alumnos);
        return view('listado', compact('alumnos'));
    }
}
