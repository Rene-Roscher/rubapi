<?php

namespace RServices\RUBApi;

use GuzzleHttp\Client;
use http\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Http;

class RUBApi
{

    private $uri;
    private $version = 'v1.0.0';

    public function __construct($uri = 'https://interface.roeth-und-beck.de/api/v1/')
    {
        $this->uri = $uri;
    }

    public function request($method, $endpoint, $payload = null)
    {
        throw_if(is_null($apiToken = config('services.rubapi.apiToken')), new InvalidArgumentException('no service params found for rubapi-client'));
        $response = Http::withToken($apiToken)
            ->withUserAgent(sprintf('RUBAPI-CLIENT @%s', $this->version))
            ->contentType('application/json')
            ->{$method}(sprintf('%s', $endpoint), $payload);
        return $response->json();
    }

    public function __call($name, $arguments)
    {
        $name = strtolower($name); // only for idiots :>
        foreach (['get', 'post', 'put', 'delete'] as $method)
            if ($method == $name)
                return call_user_func([static::class, 'request'], $name, $arguments[0], isset($arguments[1]) ? $arguments[1] : null);
    }

}
