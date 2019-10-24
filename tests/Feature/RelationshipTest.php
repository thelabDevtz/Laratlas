<?php

namespace Thelabdev\Laratlas\Tests\Feature;
use Thelabdev\Laratlas\District;
use Thelabdev\Laratlas\Region;
use Thelabdev\Laratlas\Street;
use Thelabdev\Laratlas\Tests\TestCase;
use Thelabdev\Laratlas\Ward;

class RelationshipTest extends TestCase
{
    /** @test */
    public function test_region_has_many_districts()
    {
      $region = Region::find(1);
      $this->assertTrue($region != null);
      $this->assertGreaterThanOrEqual(0, $region->districts->count());
    }

    /** @test */
    public function test_district_belongs_to_region()
    {
      $district = District::find(1);
      $this->assertTrue($district != null);
      $this->assertTrue($district->region != null);
    }

    /** @test */
    public function test_district_has_many_wards()
    {
      $district = District::find(1);
      $this->assertTrue($district != null);
      $this->assertGreaterThanOrEqual(0, $district->wards->count());
    }

    /** @test */
    public function test_ward_belongs_to_district()
    {
      $ward = Ward::find(1);
      $this->assertTrue($ward != null);
      $this->assertTrue($ward->district != null);
    }

    /** @test */
    public function test_ward_has_many_streets()
    {
      $ward = Ward::find(1);
      $this->assertTrue($ward != null);
      $this->assertGreaterThanOrEqual(0, $ward->streets->count());
    }

    /** @test */
    public function test_street_belongs_to_ward()
    {
      $street = Street::find(1);
      $this->assertTrue($street != null);
      $this->assertTrue($street->ward != null);
    }
}
