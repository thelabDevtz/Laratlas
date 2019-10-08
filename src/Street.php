<?php


namespace Thelabdev\Laratlas;;


use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $guarded = [];
    public $timestamps = false;

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
