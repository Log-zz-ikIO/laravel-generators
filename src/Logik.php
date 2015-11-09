<?php
namespace LogikIO\Generators;

use Detection\MobileDetect;

class Logik
{
    /**
     * The application instance.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;
    /**
     * The MobileDetect instance.
     *
     * @var MobileDetect
     */
    protected $detect;

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


}