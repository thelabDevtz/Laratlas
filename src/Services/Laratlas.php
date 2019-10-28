<?php
namespace Thelabdev\Laratlas\Services;
use Thelabdev\Laratlas\Contracts\LaratlasInterface;
use Thelabdev\Laratlas\Models\Region;
use thelabdev\Laratlas\Repositories\Laratlas\RegionRepository;

class Laratlas implements LaratlasInterface
{
    /**
     * @var RegionRepository
     */
    protected $regionRepository;

    /**
     * Laratlas constructor.
     * @param RegionRepository $regionRepository
     */
    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }

    /**
     * @return mixed
     */
    public function getAllRegion()
    {
        // TODO: Implement getAllRegion() method.
        return $this->regionRepository->getAll();

    }

    /**
     * @param $regionId
     * @return mixed
     */
    public function findRegionById($regionId)
    {
        // TODO: Implement findRegionById() method.
        return $this->regionRepository->find($regionId);
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function findRegionByName($name = '')
    {
        // TODO: Implement findRegionByName() method.
        return $this->regionRepository->query()->whereRegionName($name);

    }

    /**
     * @param $regionId
     * @return mixed
     */
    public function getAllDistrictOfRegion($regionId)
    {
        // TODO: Implement getAllDistrictOfRegion() method.
        return Region::find($regionId)->districts;
    }

    /**
     * @return mixed
     */
    public function getAllDistrict()
    {
        // TODO: Implement getAllDistrict() method.
    }

    /**
     * @param $districtId
     * @return mixed
     */
    public function findDistrictById($districtId)
    {
        // TODO: Implement findDistrictById() method.
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function findDistrictByName($name = '')
    {
        // TODO: Implement findDistrictByName() method.
    }
}



