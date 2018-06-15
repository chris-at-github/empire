<?php

namespace App;

class Empire {

	/**
	 * @return string
	 */
	public function getVersion() {
		return config('empire.version');
	}

	/**
	 * @return string
	 */
	public function getName() {
		return config('empire.name');
	}
}