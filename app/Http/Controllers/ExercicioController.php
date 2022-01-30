<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioController extends Controller
{

    public function soma($num1, $num2){
        $soma = $num1 + $num2;
        logger()->info('Soma feita');
        return $soma;
    }

    public function sub($num1, $num2){
        $sub = $num1 - $num2;
        logger()->debug('Sub feita', ['num1' => $num1, 'num2' => $num2, 'sub' => $sub]);
        return $sub;
    }

    public function divError($num1, $num2){
        if($num2 == 0){
            logger()->error('Divisor zero!');
            return 'Divisor não pode ser 0 ';
        }else{
            $div = $num1 / $num2;
            logger()->info('Div feita' );
            return $div;
        }
    }

}
