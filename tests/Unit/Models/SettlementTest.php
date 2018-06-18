<?php

namespace Tests\Unit\Models;

class SettlementTest extends \Tests\TestCase {

	/**
	 * @return void
	 */
	protected function setUp() {
		parent::setUp();

		// clear settlement table before each test
		\Illuminate\Support\Facades\DB::table('settlements')->truncate();
	}

	public function testIntance() {
		$this->assertInstanceOf(\App\Models\Settlement::class, app(\App\Models\Settlement::class));
	}

	public function testCreate() {
		$settlement = app(\App\Models\Settlement::class);

		$this->assertTrue($settlement->save());
		$this->assertTrue(\Ramsey\Uuid\Uuid::isValid($settlement->id));
	}

	public function testFindById() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		\Illuminate\Support\Facades\DB::table('settlements')->insert([
			'id' => $uuid
		]);

		$settlement = app(\App\Models\Settlement::class)::find($uuid);

		$this->assertInstanceOf(\App\Models\Settlement::class, $settlement);
		$this->assertEquals($uuid, $settlement->id);
	}
}