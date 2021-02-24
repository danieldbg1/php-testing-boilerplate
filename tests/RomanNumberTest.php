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


}
