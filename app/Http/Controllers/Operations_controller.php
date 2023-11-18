<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Operations_controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function suma($a,$b){
        return $a + $b;
    }
}