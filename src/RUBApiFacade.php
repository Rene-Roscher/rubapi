<?php

namespace RServices\RUBApi;

use Illuminate\Support\Facades\Facade;

/**
 * @method string request($method, $uri, $payload = null)
 * @method static string get($uri, $payload = null)
 * @method static string post($uri, $payload = null)
 * @method static string put($uri, $payload = null)
 * @method static string delete($uri, $payload = null)
 */
class RUBApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rubapi';
    }
}
