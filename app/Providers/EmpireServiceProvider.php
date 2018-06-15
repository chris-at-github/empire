<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmpireServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton(\App\Empire::class, function($app) {
			return new \App\Empire();
		});
	}
}
