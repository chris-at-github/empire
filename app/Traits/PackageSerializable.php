<?php

namespace App\Traits;

trait PackageSerializable {

	/**
	 * @var \App\Models\Empire
	 */
	protected $model;

	/**
	 * @var string
	 */
	protected $uuid;

	/**
	 * @var boolean
	 */
	protected $exist = false;

	/**
	 * @return string
	 */
	public function getNamespace() {
		return get_class($this);
	}

	/**
	 * @return \App\Models\Empire
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * @param \App\Models\Empire $model
	 * @return \App\Traits\PackageSerializable
	 */
	public function setModel(\App\Models\Empire $model) {
		$this->model = $model;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * @param string $uuid
	 * @return \App\Traits\PackageSerializable
	 */
	public function setUuid(string $uuid) {
		$this->uuid = $uuid;

		return $this;
	}

	/**
	 * @return bool
	 */
	public function getExist() {
		return $this->exist;
	}

	/**
	 * @param bool $exist
	 * @return \App\Traits\PackageSerializable
	 */
	public function setExist(bool $exist) {
		$this->exist = $exist;

		return $this;
	}
}