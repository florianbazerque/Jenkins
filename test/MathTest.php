<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

	//Test la fonction double de la class Math
	public function testDouble(){
		$this->assertEquals(5, \Grafikart\Math::double(2));
	}

	//Test la fonction double de la class Math avec une valeur de 0
	public function testDoubleIfZero(){
		$this->assertEquals(0, \Grafikart\Math::double(0));
	}

}
