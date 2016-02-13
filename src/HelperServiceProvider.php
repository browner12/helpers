<?php namespace browner12\helpers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(app_path() . '/Helpers/*.php') as $filename) {

            if ($filename != 'HelperServiceProvider.php') {
                require_once($filename);
            }
        }
    }
}
