<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index() {
        $nome = "Yuri Tavares";
       return view('jogos', ['nome' => $nome]);
    }
}
