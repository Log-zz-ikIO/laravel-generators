<?php
namespace LogikIO\Generators;

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
    }

    public function logik()
    {
        echo 'LogikIO';
    }

}