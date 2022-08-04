<?php

namespace App\Http\Controllers;

use Error;
use Exception;
use Illuminate\Http\Request;
use ValueError;

class ControladorPrecios extends Controller
{
    public function Precios($opcion){

        if(is_numeric($opcion) && $opcion >= 100){

            if($opcion <= 100000 and $opcion > 0){
                return '“Este producto no tiene descuento”';
            }

            else if($opcion >000 and $opcion <000){
                $desc= 0.00;
                return 'El descuento del producto es del' .$desc .', y el total a
                pagar es:' .$opcion -($opcion * $desc) ;
            }

            else if($opcion > 100000 and $opcion <= 150000) {
                $desc = 0.02;
                return 'El descuento del producto es del 2%, y el total a
                pagar es:' .$opcion -($opcion * $desc) ;
            }

            else if($opcion > 150000 and $opcion  < 300000) {
                $desc = 0.03;
                return 'El descuento del producto es del 3%, y el total a
                pagar es:' .$opcion -($opcion * $desc) ;
            }

            else if($opcion > 300000 and $opcion < 500000 ) {
                $desc =  0.04;
                return 'El descuento del producto es del 2%, y el total a
                pagar es:' .$opcion -($opcion * $desc) ;
            }

            else if($opcion >= 500000) {
                $desc = 0.05 ;
                return 'El descuento del producto es del 5%, y el total
                a pagar es de:' .$opcion -($opcion * $desc) ;
            }
        }
        else{
             print '“El valor ingresado es incorrecto. Inténtelo nuevamente”' ;
        }

    }

    public function getIVA($name,$pre){
        $tren = 0.19;
        $tren = config("constants.iva");
        $iva = $tren * $pre;
        $total = $pre + $iva;
        return "el articulo $name sin IVA cuesta $pre y el precio del Iva es de $iva . el total a pagar es: $total";

    }
}
