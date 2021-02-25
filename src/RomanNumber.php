<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanNumber
{

    public function cambiarDecimalARomano(int $numeroDecimal){
        if ($numeroDecimal == 1){
            return "I";
        }
        if ($numeroDecimal == 4){
            return "IV";
        }
        if ($numeroDecimal == 5){
            return "V";
        }
        if ($numeroDecimal == 9){
            return "IX";
        }
        if ($numeroDecimal == 10){
            return "X";
        }
        if ($numeroDecimal == 40){
            return "XL";
        }
        if ($numeroDecimal == 50){
            return "L";
        }
        if ($numeroDecimal == 90){
            return "XC";
        }
        if ($numeroDecimal == 100){
            return "C";
        }
        if ($numeroDecimal == 400){
            return "CD";
        }
        if ($numeroDecimal == 500){
            return "D";
        }
        if ($numeroDecimal == 900){
            return "CM";
        }
        if ($numeroDecimal == 1000){
            return "M";
        }
    }

    public function convertirNumerosRomanos(int $numeroDecimal){
        $numeroRomano = "";
        $numeroMinMax = $this->buscarNumeroMinimoMaximo($numeroDecimal);
        $numeroRomano.=$this->cambiarDecimalARomano($numeroMinMax);


        return $numeroRomano;
    }


}