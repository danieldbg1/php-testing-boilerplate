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



}
