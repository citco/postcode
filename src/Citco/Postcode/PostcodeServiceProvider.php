<?php namespace Citco\Postcode;

class PostcodeServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('postcode', function($app)
		{
			return new Postcode();
		});
	}
}
