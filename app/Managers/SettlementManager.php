<?php

namespace App\Managers;

class Settlement {

	/**
	 * @param string $namespace
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function create($namespace) {}

	/**
	 * @param \App\Models\Settlement $model
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function get(\App\Models\Settlement $model) {}

	/**
	 * @param \App\Packages\Settlement\Settlement $settlement
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function store(\App\Packages\Settlement\Settlement $settlement) {}

	/**
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function find() {}
}