<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empire extends Model {

	use \App\Traits\Uuid;

	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = false;

	/**
	 * properties which can not fill over mass assignment
	 *
	 * @var array $guarded
	 */
	protected $guarded =[];

	/**
	 * store an mass assignment array to the model properties. if validator rules are defined, the
	 * properties will be checked before saving them to database
	 *
	 * @param array $properties
	 * @return boolean
	 */
	public function store($properties = []) {
		return $this
			->fill($properties)
			->save();
	}
}