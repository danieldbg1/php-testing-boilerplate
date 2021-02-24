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

    }



}