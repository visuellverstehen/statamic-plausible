<?php

namespace VV\Plausible\Tests\Feature;

use VV\Plausible\Tests\TestCase;

class RouteTest extends TestCase
{
    /** @test */
    public function the_route_returnes_the_link_provied_from_the_config_file()
    {
        $this->withoutMiddleware();

        $linkFromConfig = config('plausible.link');

        $this->get(cp_route('plausible'))->assertRedirect($linkFromConfig);
    }
}
