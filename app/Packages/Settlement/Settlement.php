<?php

namespace App\Packages\Settlement;

class Settlement {

	use \App\Traits\PackageSerializable;

	/**
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * @var array
	 */
	protected $serializable = null;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return \App\Packages\Settlement\Settlement
	 */
	public function setName(string $name) {
		$this->name = $name;

		return $this;
	}
}