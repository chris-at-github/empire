<?php

namespace Tests\Unit\Packages\Settlement;

class SettlementTest extends \Tests\TestCase {

	public function testIntance() {
		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, app(\App\Packages\Settlement\Settlement::class));
	}

	public function testGetNamespace() {
		$this->assertEquals('App\Packages\Settlement\Settlement', app(\App\Packages\Settlement\Settlement::class)->getNamespace());
	}

	public function testUuidProperty() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
		$settlement = app(\App\Packages\Settlement\Settlement::class);

		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, $settlement->setUuid($uuid));
		$this->assertEquals($uuid, $settlement->getUuid());
	}

	public function testModelProperty() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
		$settlement = app(\App\Packages\Settlement\Settlement::class);
		$model = app(\App\Models\Settlement::class);

		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, $settlement->setModel($model));
		$this->assertEquals($model, $settlement->getModel());
	}

	public function testExistProperty() {
		$settlement = app(\App\Packages\Settlement\Settlement::class);

		$this->assertFalse($settlement->getExist());

		$settlement->setExist(true);
		$this->assertTrue($settlement->getExist());
	}
}