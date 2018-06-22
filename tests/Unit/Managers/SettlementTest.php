<?php

namespace Tests\Unit\Managers;

class SettlementManagerTest extends \Tests\TestCase {

	/**
	 * @return void
	 */
	protected function setUp() {
		parent::setUp();

		// clear settlement table before each test
		\Illuminate\Support\Facades\DB::table('settlements')->truncate();
	}

	/**
	 * @see https://phpunit.de/manual/6.5/en/writing-tests-for-phpunit.html
	 */
	public function databaseProvider() {

	}

	public function testIntance() {
		$this->assertInstanceOf(\App\Managers\Settlement::class, app(\App\Managers\Settlement::class));
	}

	public function testGet() {

		// Erstellung der Testdaten
		$manager = app(\App\Managers\Settlement::class);
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		\Illuminate\Support\Facades\DB::table('settlements')->insert([
			'id' => $uuid,
			'namespace' => 'App\Packages\Settlement\Settlement'
		]);

		$model = app(\App\Models\Settlement::class)::find($uuid);
		$settlement = $manager->get($model);

		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, $settlement);
	}
}