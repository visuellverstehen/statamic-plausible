<?php

namespace VV\Plausible\Http\Controller;

use VV\Plausible\Plausible;

class PlausibleController
{
    public function __invoke()
    {
        return redirect(Plausible::link());
    }
}
