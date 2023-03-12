<?php

namespace K2ouMais\Lei\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \K2ouMais\Lei\Lei
 */
class Lei extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \K2ouMais\Lei\Lei::class;
    }
}
