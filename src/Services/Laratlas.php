<?php

namespace Thelabdev\Laratlas\Services;

use Thelabdev\Laratlas\Contracts\LaratlasInterface;
use Thelabdev\Laratlas\Repositories\Laratlas\DistrictRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\RegionRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\StreetRepository;
use Thelabdev\Laratlas\Repositories\Laratlas\WardRepository;

class Laratlas implements LaratlasInterface
{
    /**
     * @var RegionRepository
     */
    protected $regionRepository;

    /**
     * @var DistrictRepository
     */
    protected $districtRepository;

    /**
     * @var WardRepository
     */
    protected $wardRepository;

    /**
     * @var StreetRepository
     */
    protected $streetRepository;

    /**
     * Laratlas constructor.
     *
     * @param RegionRepository   $regionRepository
     * @param DistrictRepository $districtRepository
     * @param WardRepository     $wardRepository
     * @param StreetRepository   $streetRepository
     */
    public function __construct(
        RegionRepository $regionRepository,
        DistrictRepository $districtRepository,
        WardRepository $wardRepository,
        StreetRepository $streetRepository
    ) {
        $this->regionRepository = $regionRepository;
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
        $this->streetRepository = $streetRepository;
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
     *
     * @return mixed
     */
    public function findRegionById($regionId)
    {
        // TODO: Implement findRegionById() method.
        return $this->regionRepository->find($regionId);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findRegionByName($name = '')
    {
        // TODO: Implement findRegionByName() method.
    }

    /**
     * @param $regionId
     *
     * @return mixed
     */
    public function getAllDistrictOfRegion($regionId)
    {
        // TODO: Implement getAllDistrictOfRegion() method.
        return $this->regionRepository->find($regionId)->districts;
    }

    /**
     * @return mixed
     */
    public function getAllDistrict()
    {
        // TODO: Implement getAllDistrict() method.
        return $this->districtRepository->getAll();
    }

    /**
     * @param $districtId
     *
     * @return mixed
     */
    public function findDistrictById($districtId)
    {
        // TODO: Implement findDistrictById() method.
        return $this->districtRepository->find($districtId);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findDistrictByName($name = '')
    {
        // TODO: Implement findDistrictByName() method.
    }

    /**
     * @return mixed
     */
    public function getAllWard()
    {
        // TODO: Implement getAllWard() method.
        return $this->wardRepository->getAll();
    }

    /**
     * @param $wardId
     *
     * @return mixed
     */
    public function findWardById($wardId)
    {
        // TODO: Implement findWardById() method.
        return $this->wardRepository->find($wardId);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findWardByName($name = '')
    {
        // TODO: Implement findWardByName() method.
    }

    /**
     * @param $wardId
     *
     * @return mixed
     */
    public function getAllStreetOfWard($wardId)
    {
        // TODO: Implement getAllStreetOfWard() method.
        return ($this->wardRepository->find($wardId) == null) ? 'data not found' : $this->wardRepository->find($wardId)->streets;
    }

    /**
     * @return mixed
     */
    public function getAllStreet()
    {
        // TODO: Implement getAllStreet() method.
        return $this->streetRepository->getAll();
    }

    /**
     * @param $streetId
     *
     * @return mixed
     */
    public function findStreetById($streetId)
    {
        // TODO: Implement findStreetById() method.
        return $this->streetRepository->find($streetId);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function findStreetByName($name = '')
    {
        // TODO: Implement findStreetByName() method.
    }

    /**
     * @param $districtId
     *
     * @return mixed
     */
    public function getAllWardOfDistrict($districtId)
    {
        // TODO: Implement getAllWardOfDistrict() method.
        return $this->districtRepository->find($districtId)->wards;
    }
}
