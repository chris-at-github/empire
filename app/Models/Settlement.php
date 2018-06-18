<?php

namespace App\Models;

class Settlement extends Empire {

	/**
	 * @var string
	 */
	protected $table = 'settlements';

	/**
	 * @var array
	 */
	protected $fillable = ['namespace'];
}
