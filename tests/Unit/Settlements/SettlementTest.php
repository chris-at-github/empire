<?php

namespace Tests\Unit\Settlements;

class SettlementTest extends \Tests\TestCase {

	public function testIntance() {
		$this->assertInstanceOf(\App\Settlements\Settlement::class, app(\App\Settlements\Settlement::class));
	}

	public function testGetNamespace() {
		$this->assertEquals('App\Settlements\Settlement', app(\App\Settlements\Settlement::class)->getNamespace());
	}
}