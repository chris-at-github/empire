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

		$this->assertTrue($settlement->store());
		$this->assertTrue(\Ramsey\Uuid\Uuid::isValid($settlement->id));
	}

	public function testCreateUuid() {
		$settlement = app(\App\Models\Settlement::class);
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		$settlement->id = $uuid;
		$settlement->store();

		$this->assertEquals($settlement->id, $uuid);
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

	public function testStoreAndGet() {
		$namespace = 'App\Packages\Settlement\Settlement';

		$store = app(\App\Models\Settlement::class);
		$store->store([
			'namespace' => $namespace
		]);

		$get = app(\App\Models\Settlement::class)::find($store->id);

		$this->assertEquals($namespace, $get->namespace);
	}
}