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
	 * Muss in der abgeleiteten Klasse definiert werden, erzeugt sonst einen Fatal Error bei anderer initialer Befuellung
	 * @see http://php.net/manual/de/language.oop5.traits.php
	 * @var array
	 *
	 * protected $fillable = [];
	 */

	/**
	 * Muss in der abgeleiteten Klasse definiert werden, erzeugt sonst einen Fatal Error bei anderer initialer Befuellung
	 * @see http://php.net/manual/de/language.oop5.traits.php
	 * @var array
	 *
	 * protected $serializable;
	 */

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

	/**
	 * @return array
	 */
	public function getFillable() {
		return $this->fillable;
	}

	/**
	 * @param array $fillable
	 * @return \App\Traits\PackageSerializable
	 */
	public function setFillable($fillable) {
		$this->fillable = $fillable;

		return $this;
	}

	/**
	 * @return array|null
	 */
	public function getSerializable() {
		return $this->serializable;
	}

	/**
	 * @param array|null $serializable
	 */
	public function setSerializable($serializable) {
		$this->serializable = $serializable;
	}

	/**
	 * @param array
	 * @return \App\Traits\PackageSerializable
	 */
	public function fill($properties) {
		foreach($properties as $name => $property) {
			if(in_array($name, $this->fillable) === true) {
				$method = 'set' . \Illuminate\Support\Str::studly($name);

				if(method_exists($this, $method) === true) {
					$this->{$method}($property);
				}
			}
		}

		return $this;
	}
}