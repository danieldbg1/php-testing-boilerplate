<?php


namespace Deg540\PHPTestingBoilerplate;


class RomanToDecimalNumber
{
    public function convertirNumerosRomanos(int $numeroDecimal){
        $arrayCasosBaseRomanos = array("M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,"L"=>50,
            "XL"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1);
        $numeroRomanoResultado = "";
        while ($numeroDecimal > 0) {
            foreach ($arrayCasosBaseRomanos as $arrayNumeroDecimal=>$arrayNumeroRomano) {
                if ($numeroDecimal >= $arrayNumeroRomano){
                    $numeroDecimal-=$arrayNumeroRomano;
                    $numeroRomanoResultado.=$arrayNumeroDecimal;
                    break 1;
                }
            }
        }

        return $numeroRomanoResultado;
    }

}