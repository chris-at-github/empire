<?php

namespace App\Traits;

trait PackageSerializable {

	/**
	 * @return string
	 */
	public function getNamespace() {
		return get_class($this);
	}
}