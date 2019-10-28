<?php


namespace thelabdev\Laratlas\Contracts;


interface LaratlasInterface
{
    /**
     * @return mixed
     */
    public function getAllRegion();

    /**
     * @param $regionId
     * @return mixed
     */
    public function findRegionById($regionId);

    /**
     * @param string $name
     * @return mixed
     */
    public function findRegionByName($name = '');

    /**
     * @param $regionId
     * @return mixed
     */
    public function getAllDistrictOfRegion($regionId);

    /**
     * @return mixed
     */
    public function getAllDistrict();

    /**
     * @param $districtId
     * @return mixed
     */
    public function findDistrictById($districtId);

    /**
     * @param string $name
     * @return mixed
     */
    public function findDistrictByName($name = '');
}