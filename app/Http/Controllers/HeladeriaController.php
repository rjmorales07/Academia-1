<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function totalHelado($opcion){
        $topping = '';
        $preciotopping = '';
        $valorHelado = 3000;
        $totalPagar = '0';

        if($opcion == 1){
            $topping = 'chocolate';
            $preciotopping = 500;
        }
        else if($opcion == 2){
            $topping = 'brownie';
            $preciotopping = 1000;
        }
        else if($opcion == 3){
            $topping = 'delicatessen';
            $preciotopping = 1500;
        }
        $totalPagar = $preciotopping + $valorHelado;
        return 'El topping seleccionado es '. $topping . ' y el total a pagar es: ' . $totalPagar;
    }
}
