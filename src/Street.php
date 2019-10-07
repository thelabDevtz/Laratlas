<?php


namespace thelabdev\Laratlas;


use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $guarded = [];

    /*
    |-------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */

    /** get ward belongs to street */
    public function ward(){
        return $this->belongsTo(Ward::class);
    }

}