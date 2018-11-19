<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuController extends Controller
{
    public  function getNome(){
        return "Juan Carlos Barata";
    }

    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}
