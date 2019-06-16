<?php

namespace Ehsanhasani\Socialite\Facades;

use Illuminate\Support\Facades\Facade;
use Ehsanhasani\Socialite\Contracts\Factory;

/**
 * @see \Ehsanhasani\Socialite\SocialiteManager
 */
class Socialite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
