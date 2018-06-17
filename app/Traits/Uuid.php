<?php

namespace App\Traits;

trait Uuid {

	/**
	 * Boot function from laravel.
	 */
	protected static function boot() {
		parent::boot();

		static::creating(function($model) {
			$model->{$model->getKeyName()} = \Ramsey\Uuid\Uuid::uuid4()->toString();
		});
	}
}