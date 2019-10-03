<?php


namespace thelabdev\Laratlas\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use thelabdev\Laratlas\District;
use thelabdev\Laratlas\Tests\TestCase;

class SaveDistrictTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_district_can_be_create_with_factory(){
        $district = factory(District::class)->create();
        $this->assertCount(1, District::all());
    }
}