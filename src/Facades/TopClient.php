<?php namespace FireSoil\TopClient\Facades;

use Illuminate\Support\Facades\Facade;

class TopClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'topclient';
    }
}