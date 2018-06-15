<?php

namespace Tests\Unit;

class EmpireTest extends \Tests\TestCase {

	public function testIntance() {
		$this->assertInstanceOf(\App\Empire::class, app(\App\Empire::class));
	}

	public function testGetVersion() {
		$this->assertEquals('0.0.1', app(\App\Empire::class)->getVersion());
	}

	public function testGetName() {
		$this->assertEquals('Empire', app(\App\Empire::class)->getName());
	}
}