<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OficinaModel;
use DB;

class OficinaController extends Controller
{
    function listar() {
        $oficinas = OficinaModel::get();
        //return dd($oficinas);
        return view ("listado", compact("oficinas"));
    }
}
