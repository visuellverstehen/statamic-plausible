<?php

namespace VV\Plausible\Tests\Unit;

use VV\Plausible\Plausible;
use VV\Plausible\Tests\TestCase;

class LinkTest extends TestCase
{
    /** @test */
    public function a_public_shared_link_will_get_returned()
    {
        $linkFromConfig = config('plausible.link');

      $this->assertEquals(
          $linkFromConfig, Plausible::link()
      );
    }
}
