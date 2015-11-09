<?php
namespace LogikIO\Generators;

use Log;

class Logik
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Route info.
     *
     * @var \Illuminate\Routing\Route
     */
    protected $routeInfo;

    /**
     * Package config.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * @param $app  \Illuminate\Contracts\Foundation\Application
     */
    public function __construct($app)
    {
        // $this->app->session->
        // $this->config
        $this->app = $app;
        $this->config = $this->app->config;

        dump($this->app->session->put('logik', 'LogikIO'));
        Log::debug( json_encode($this->app->session->all()) );
    }

    public function logik()
    {
        echo 'LogikIO';
    }

}