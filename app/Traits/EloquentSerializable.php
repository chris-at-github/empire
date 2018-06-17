<?php

namespace App\Traits;

trait EloquentSerializable {

	/**
	 * @return string
	 */
	public function getNamespace() {
		return get_class($this);
	}
}