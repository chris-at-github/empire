<?php

namespace App\Managers;

class Settlement {

	/**
	 * @param string $namespace
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function create($namespace) {
		$settlement = app($namespace);

		if($settlement instanceof \App\Packages\Settlement\Settlement) {
			$settlement
				->setExist(false)
				->setUuid(\Ramsey\Uuid\Uuid::uuid4()->toString());
		}

		return $settlement;
	}

	/**
	 * @param \App\Models\Settlement $model
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function get(\App\Models\Settlement $model) {
		$settlement = app($model->namespace);

		if($settlement instanceof \App\Packages\Settlement\Settlement) {
			$settlement
				->setExist(true)
				->setUuid($model->id)
				->setModel($model);
		}

		return $settlement;
	}

	/**
	 * @param \App\Packages\Settlement\Settlement $settlement
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function store(\App\Packages\Settlement\Settlement $settlement) {
		if($settlement->getExist() === true) {
			$settlement->getModel()->store();

		} else {
			$model = app(\App\Models\Settlement::class);
			$model->id = $settlement->getUuid();
			$model->store([
				'namespace' => $settlement->getNamespace()
			]);

			$settlement
				->setExist(true)
				->setModel($model);
		}

		return $settlement;
	}

	/**
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function find() {}
}