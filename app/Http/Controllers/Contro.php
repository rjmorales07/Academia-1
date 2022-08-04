<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Contro extends Controller
{
    public function multipli($a,$b){
        return 'la multiplicacion da: ' .$a * $b;
    }
}

