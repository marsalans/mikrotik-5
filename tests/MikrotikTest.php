<?php

namespace Wesleydeveloper\Mikrotik\Tests;

use Wesleydeveloper\Mikrotik\Facades\Mikrotik;
use Wesleydeveloper\Mikrotik\ServiceProvider;
use Orchestra\Testbench\TestCase;

class MikrotikTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'mikrotik' => Mikrotik::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
