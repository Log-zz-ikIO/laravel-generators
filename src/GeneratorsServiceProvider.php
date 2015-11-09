<?php

namespace LogikIO\Generators;

use Illuminate\Support\ServiceProvider;

class GeneratorsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootConfig();
        $this->registerAlias();
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

    /**
     * Set config file for package
     */
    protected function bootConfig()
    {
        $path = __DIR__ . '/../config/settings.php';
        $this->publishes([$path => config_path('settings.php')]);
        $this->mergeConfigFrom($path, 'settings');
    }

    /**
     * @param $alias boolean
     */
    private function registerAlias()
    {
        // if ($alias === true) {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Logik', LogikFacade::class);
        // }
    }

}