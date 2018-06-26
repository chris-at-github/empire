<?php

namespace App\Traits;

trait Uuid {

	/**
	 * Boot function from laravel.
	 */
	protected static function boot() {
		parent::boot();

		static::creating(function($model) {
			if(empty($model->{$model->getKeyName()}) === true) {
				$model->{$model->getKeyName()} = \Ramsey\Uuid\Uuid::uuid4()->toString();
			}
		});
	}
}