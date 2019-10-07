<?php

namespace thelabdev\Laratlas;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];

    /*
    |-------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */

    /**get all wards of the Districts*/
    public function wards(){
        return $this->hasMany(Ward::class);
    }

    /** get region belongs to district */
    public function region(){
        return $this->belongsTo(Region::class);
    }
}