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
	public function settlementModelProvider() {
		$uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();

		\Illuminate\Support\Facades\DB::table('settlements')->insert([
			'id' => $uuid,
			'namespace' => 'App\Packages\Settlement\Settlement',
			'created_at' => '2018-06-18 23:30:00',
			'updated_at' => '2018-06-18 23:30:00'
		]);

		return app(\App\Models\Settlement::class)::find($uuid);
	}

	public function testIntance() {
		$this->assertInstanceOf(\App\Managers\Settlement::class, app(\App\Managers\Settlement::class));
	}

	public function testGet() {
		$model = $this->settlementModelProvider();
		$manager = app(\App\Managers\Settlement::class);
		$settlement = $manager->get($model);

		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, $settlement);
		$this->assertTrue($settlement->getExist());
		$this->assertEquals($model->id, $settlement->getUuid());
		$this->assertEquals($model, $settlement->getModel());
	}

	public function testGetStore() {
		$model = $this->settlementModelProvider();
		$manager = app(\App\Managers\Settlement::class);
		$settlement = $manager->get($model);

		$this->assertInstanceOf(\App\Packages\Settlement\Settlement::class, $manager->store($settlement));
	}
}