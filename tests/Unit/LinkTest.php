<?php

namespace VV\Plausible\Tests\Unit;

use VV\Plausible\Exceptions\PlausibleException;
use VV\Plausible\Plausible;
use VV\Plausible\Tests\TestCase;

class LinkTest extends TestCase
{
    /** @test */
    public function the_link_provided_in_the_config_file_will_get_returned()
    {
        $linkFromConfig = config('plausible.link');

        $this->assertEquals($linkFromConfig, Plausible::link());
    }

    /** @test */
    public function it_throws_an_exception_if_the_link_is_null()
    {
        $this->expectException(PlausibleException::class);

        config()->set('plausible.link', null);

        Plausible::link();
    }
}
