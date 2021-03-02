<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\RomanNumber;
use PHPUnit\Framework\TestCase;

class RomanNumberTest extends TestCase{

    /**
     * @test
     */
    public function casos_base(){
        $decimalNumber = new RomanNumber();

        $this->assertEquals("I", $decimalNumber->convertirNumerosRomanos(1));
        $this->assertEquals("IV", $decimalNumber->convertirNumerosRomanos(4));
        $this->assertEquals("V", $decimalNumber->convertirNumerosRomanos(5));
        $this->assertEquals("IX", $decimalNumber->convertirNumerosRomanos(9));
        $this->assertEquals("X", $decimalNumber->convertirNumerosRomanos(10));
        $this->assertEquals("XL", $decimalNumber->convertirNumerosRomanos(40));
        $this->assertEquals("L", $decimalNumber->convertirNumerosRomanos(50));
        $this->assertEquals("XC", $decimalNumber->convertirNumerosRomanos(90));
        $this->assertEquals("C", $decimalNumber->convertirNumerosRomanos(100));
        $this->assertEquals("CD", $decimalNumber->convertirNumerosRomanos(400));
        $this->assertEquals("D", $decimalNumber->convertirNumerosRomanos(500));
        $this->assertEquals("CM", $decimalNumber->convertirNumerosRomanos(900));
        $this->assertEquals("M", $decimalNumber->convertirNumerosRomanos(1000));
    }

    /**
     * @test
     */
    public function casos_suma(){
        $decimalNumber = new RomanNumber();

        $this->assertEquals("III", $decimalNumber->convertirNumerosRomanos(3));
        $this->assertEquals("VIII", $decimalNumber->convertirNumerosRomanos(8));
        $this->assertEquals("XXIII", $decimalNumber->convertirNumerosRomanos(23));
    }

    /**
     * @test
     */
    public function casos_resta(){
        $decimalNumber = new RomanNumber();

        $this->assertEquals("IV", $decimalNumber->convertirNumerosRomanos(4));
        $this->assertEquals("IX", $decimalNumber->convertirNumerosRomanos(9));
        $this->assertEquals("XCIX", $decimalNumber->convertirNumerosRomanos(99));
    }

    /**
     * @test
     */
    public function devuelve_numero_descompuesto_en_romano(){
        $decimalNumber = new RomanNumber();

        $this->assertEquals("VIII", $decimalNumber->convertirNumerosRomanos(8));
        $this->assertEquals("IV", $decimalNumber->convertirNumerosRomanos(4));
        $this->assertEquals("XLIX", $decimalNumber->convertirNumerosRomanos(49));
        $this->assertEquals("CXXXIX", $decimalNumber->convertirNumerosRomanos(139));
        $this->assertEquals("LXXIV", $decimalNumber->convertirNumerosRomanos(74));
        $this->assertEquals("XCIX", $decimalNumber->convertirNumerosRomanos(99));

    }

}
