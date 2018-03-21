<?php

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

	public function testDouble(){
		$this->assertEquals(4, \Grafikart\Math::double(2));
	}

	public function testDoubleIfZero(){
		$this->assertEquals(0, \Grafikart\Math::double(0));
	}

}