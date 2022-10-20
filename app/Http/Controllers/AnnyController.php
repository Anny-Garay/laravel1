<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnyController extends Controller
{
    function listar() {
        return view("anny");
    }
}
