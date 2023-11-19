<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Operations_controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function suma($a, $b){
        return $a + $b;
    }

    function esBisiesto($year){
        if ($year % 4 != 0) {
            return false;
        } else if ($year % 4 == 0 && $year % 100 != 0) {
            return "esBiciesto";
        } else if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 != 0) {
            return false;
        } else if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
            return "esBiciesto";
        }
    }

    public function filtrarNumerosPares($lista){
        $listaFiltrada = [];
        for ($i = 0; $i < count($lista); $i++) {
            if ($lista[$i]%2 == 0) {
                array_push($listaFiltrada, $lista[$i]);
            }
        }
        return $listaFiltrada;
    }

    public function CalcularPrecioPublico($costoProducto, $tipoProducto){
        if ($tipoProducto == "Alimentos") {
            $precioPublico = $costoProducto * 1.40;
        } else if ($tipoProducto == "Tecnologia") {
            $precioPublico = $costoProducto * 1.35;
        } else {
            $precioPublico = $costoProducto * 1.20;
        }
        return $precioPublico;
    }

    public function concatenarArreglos($array1, $array2){
        $arrayFinal = array_merge($array1, $array2);
        return $arrayFinal;
    }


    public function ordenarArregloNumerico($arregloNumerico){
        sort($arregloNumerico);
        return $arregloNumerico;
    }
}