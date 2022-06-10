<?php

namespace Khalin\LaravelSlice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khalin\LaravelSlice\LaravelSlice
 */
class LaravelSlice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-slice';
    }
}
