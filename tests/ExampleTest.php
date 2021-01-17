<?php

namespace ReneRoscher\RUBApi\Tests;

use Orchestra\Testbench\TestCase;
use ReneRoscher\RUBApi\RUBApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [RUBApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
