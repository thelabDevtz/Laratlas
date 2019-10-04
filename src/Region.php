<?php

namespace thelabdev\Laratlas;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = [];

    /*
    |--------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */


    /**
     * get all districts of the regions
     */
    public function districts(){
        return $this->hasMany(District::class);
    }
}