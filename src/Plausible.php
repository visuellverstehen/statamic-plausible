<?php

namespace VV\Plausible;

class Plausible
{
    public static function link(): string
    {
        return config('plausible.link');
    }
}
