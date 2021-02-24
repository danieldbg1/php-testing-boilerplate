<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanNumber
{

    public function convertirNumerosRomanos(int $numeroDecimal){
        if ($numeroDecimal == 1){
            return "I";
        }
        if ($numeroDecimal == 5){
            return "V";
        }
        if ($numeroDecimal == 10){
            return "X";
        }
        if ($numeroDecimal == 50){
            return "L";
        }
        if ($numeroDecimal == 100){
            return "C";
        }
        if ($numeroDecimal == 500){
            return "D";
        }
        if ($numeroDecimal == 1000){
            return "M";
        }
    }

    public function buscarNumeroMinimoMaximo(int $numeroDecimal){
        if ($numeroDecimal < 5){
            return 1;
        }
        if ($numeroDecimal < 10){
            return 5;
        }
        if ($numeroDecimal < 50){
            return 10;
        }
        if ($numeroDecimal < 100){
            return 50;
        }
        if ($numeroDecimal < 500){
            return C;
        }
        if ($numeroDecimal < 1000){
            return D;
        }
    }


}