<?php

namespace Sufian\LocalizationFinder\Facades;

use Illuminate\Support\Facades\Facade;

class LocalizationFinderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'localization-finder'; // This should match the service name in the service container
    }
}
