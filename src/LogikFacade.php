<?php
namespace LogikIO\Generators;

use Illuminate\Support\Facades\Facade;

class LogikFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'logik';
    }
}