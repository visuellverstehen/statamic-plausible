<?php

namespace VV\Plausible;

use VV\Plausible\Exceptions\PlausibleException;

class Plausible
{
    public static function link(): string
    {
        throw_if(is_null(config('plausible.link')), new PlausibleException('A link has not been defined in your plausible config file'));

        return config('plausible.link');
    }
}
