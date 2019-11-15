<?php


namespace Thelabdev\Laratlas\Contracts;


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


    /**
     * @param $districtId
     * @return mixed
     */
    public function getAllWardOfDistrict($districtId);

    /**
     * @return mixed
     */
    public function getAllWard();

    /**
     * @param $wardId
     * @return mixed
     */
    public function findWardById($wardId);

    /**
     * @param string $name
     * @return mixed
     */
    public function findWardByName($name = '');

    /**
     * @param $wardId
     * @return mixed
     */
    public function getAllStreetOfWard($wardId);

    /**
     * @return mixed
     */
    public function getAllStreet();

    /**
     * @param $streetId
     * @return mixed
     */
    public function findStreetById($streetId);

    /**
     * @param string $name
     * @return mixed
     */
    public function findStreetByName($name = '');

}