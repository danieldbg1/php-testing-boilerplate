<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\RomanNumber;
use PHPUnit\Framework\TestCase;

class RomanNumberTest extends TestCase{

    /**
     * @test
     */
    public function si_es_1_devuelve_I(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(1);

        $this->assertEquals("I", $resultado);

    }

    /**
     * @test
     */
    public function si_es_5_devuelve_V(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(5);

        $this->assertEquals("V", $resultado);
    }

    /**
     * @test
     */
    public function si_es_10_devuelve_X(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(10);

        $this->assertEquals("X", $resultado);

    }

    /**
     * @test
     */
    public function si_es_50_devuelve_L(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(50);

        $this->assertEquals("L", $resultado);

    }

    /**
     * @test
     */
    public function si_es_100_devuelve_C(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(100);

        $this->assertEquals("C", $resultado);

    }

    /**
     * @test
     */
    public function si_es_500_devuelve_D(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(500);

        $this->assertEquals("D", $resultado);

    }

    /**
     * @test
     */
    public function si_es_1000_devuelve_M(){
        $romanNumber = new RomanNumber();

        $resultado = $romanNumber->convertirNumerosRomanos(1000);

        $this->assertEquals("M", $resultado);

    }

    /**
     * @test
     */
    public function devuelve_decimal_minimo_maximo(){
        $romanNumber = new RomanNumber();

        $this->assertEquals(1, $romanNumber->buscarNumeroMinimoMaximo(3));
        $this->assertEquals(50, $romanNumber->buscarNumeroMinimoMaximo(88));
        $this->assertEquals(10, $romanNumber->buscarNumeroMinimoMaximo(12));
    }

    /**
     * @test
     */
    public function devuelve(){
        //comprobar si metiendo un numero, devuelve su descomposicion en romano, p.e.:
        //meto 3, devuelve III, meto 18, devuelve XVIII.Sin comprobar los 4, 9, 90,...
    }




}
