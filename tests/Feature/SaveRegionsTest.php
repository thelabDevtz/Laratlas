<?php

namespace thelabdev\Laratlas\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use thelabdev\Laratlas\Region;
class SaveRegionsTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function a_region_can_be_created_with_factory(){
        $region = factory(Region::class)->create();
        $this->assertCount(1, Region::all());
    }
}