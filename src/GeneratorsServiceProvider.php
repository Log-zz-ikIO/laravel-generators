<?php

namespace LogikIO\Generators;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
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
        $this->registerGenerator();
    }

    /**
     * Register the make:migration generator.
     */
    private function registerGenerator()
    {
        $this->app->singleton('command.logikio.make', function ($app) {
            return $app['LogikIO\Generators\Commands\ApiResourceMakeCommand'];
        });

        $this->app->singleton('logik', function ($app) {
            return new Logik($app);
        });

        $this->commands('command.logikio.make');
    }

    public function provides()
    {
        return ['logik'];
    }

}
