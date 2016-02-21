<?php namespace browner12\helpers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * register the service provider
     *
     * @return void
     */
    public function register()
    {
        //register commands
        $this->commands([
            Commands\HelperMakeCommand::class,
        ]);

        //include the helpers
        foreach (glob(app_path() . '/Helpers/*.php') as $filename) {

            if ($filename != 'HelperServiceProvider.php') {
                require_once($filename);
            }
        }
    }

    /**
     * boot the service provider
     *
     * @return void
     */
    public function boot()
    {
        //publish configuration
        $this->publishes([
            __DIR__ . '/config/helpers.php' => config_path('helpers.php'),
        ], 'config');
    }
}
