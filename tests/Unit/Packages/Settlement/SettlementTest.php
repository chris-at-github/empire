<?php

namespace Tests\Unit\Packages\Settlement;

class SettlementTest extends \Tests\TestCase {

	public function testIntance() {
		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, app(\App\Packages\Settlement\Settlement::class));
	}

	public function testGetNamespace() {
		$this->assertEquals('App\Packages\Settlement\Settlement', app(\App\Packages\Settlement\Settlement::class)->getNamespace());
	}
}