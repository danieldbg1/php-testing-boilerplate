<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\RomanNumber;
use PHPUnit\Framework\TestCase;

class RomanNumberTest extends TestCase{

    /**
     * @test
     */
    public function si_es_1_devuelve_I(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(1);

        $this->assertEquals("I", $romanNumber);

    }

    /**
     * @test
     */
    public function si_es_5_devuelve_V(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(5);

        $this->assertEquals("V", $romanNumber);
    }

    /**
     * @test
     */
    public function si_es_10_devuelve_X(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(10);

        $this->assertEquals("X", $romanNumber);

    }

    /**
     * @test
     */
    public function si_es_50_devuelve_L(){
        $decimalNumber = new RomanNumber();

        $resultado = $decimalNumber->convertirNumerosRomanos(50);

        $this->assertEquals("L", $resultado);

    }

    /**
     * @test
     */
    public function si_es_100_devuelve_C(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(100);

        $this->assertEquals("C", $romanNumber);

    }

    /**
     * @test
     */
    public function si_es_500_devuelve_D(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(500);

        $this->assertEquals("D", $romanNumber);

    }

    /**
     * @test
     */
    public function si_es_1000_devuelve_M(){
        $decimalNumber = new RomanNumber();

        $romanNumber = $decimalNumber->convertirNumerosRomanos(1000);

        $this->assertEquals("M", $romanNumber);

    }

    /**
     * @test
     */
    public function devuelve_decimal_minimo_maximo(){
        $decimalnumber = new RomanNumber();

        $this->assertEquals(1, $decimalnumber->buscarNumeroMinimoMaximo(3));
        $this->assertEquals(50, $decimalnumber->buscarNumeroMinimoMaximo(88));
        $this->assertEquals(10, $decimalnumber->buscarNumeroMinimoMaximo(12));
    }

    /**
     * @test
     */
    public function devuelve_numero_descompuesto_en_romano(){
        //comprobar si metiendo un numero, devuelve su descomposicion en romano, p.e.:
        //meto 3, devuelve III, meto 18, devuelve XVIII.Sin comprobar los 4, 9, 90,...
    }




}
