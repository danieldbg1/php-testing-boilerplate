<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanNumber
{

    private function cambiarDecimalARomano(int $numeroDecimal){
        if ($numeroDecimal >= 1000){
            return array("M", 1000);
        }
        if ($numeroDecimal >= 900){
            return array("CM", 900);
        }
        if ($numeroDecimal >= 500){
            return array("D", 500);
        }
        if ($numeroDecimal >= 400){
            return array("CD", 400);
        }
        if ($numeroDecimal >= 100){
            return array("C", 100);
        }
        if ($numeroDecimal >= 90){
            return array("XC", 90);
        }
        if ($numeroDecimal >= 50){
            return array("L", 50);
        }
        if ($numeroDecimal >= 40){
            return array("XL", 40);
        }
        if ($numeroDecimal >= 10){
            return array("X", 10);
        }
        if ($numeroDecimal >= 9){
            return array("IX", 9);
        }
        if ($numeroDecimal >= 5){
            return array("V", 5);
        }
        if ($numeroDecimal >= 4){
            return array("IV", 4);
        }
        if ($numeroDecimal >= 1){
            return array("I", 1);
        }
    }

    public function convertirNumerosRomanos(int $numeroDecimal){
        $numeroRomanoResultado = "";
        while ($numeroDecimal > 0){
            $resultadoLlamada = $this->cambiarDecimalARomano($numeroDecimal);
            $numeroRomanoResultado.=$resultadoLlamada[0];
            $numeroDecimal-=$resultadoLlamada[1];
        }

        return $numeroRomanoResultado;
    }


}