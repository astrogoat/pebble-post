<?php

namespace Astrogoat\PebblePost;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\PebblePost\PebblePost
 */
class PebblePostFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pebble-post';
    }
}
