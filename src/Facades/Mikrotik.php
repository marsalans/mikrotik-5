<?php

namespace Wesleydeveloper\Mikrotik\Facades;

use Illuminate\Support\Facades\Facade;

class Mikrotik extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mikrotik';
    }
}
