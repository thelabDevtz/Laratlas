<?php

namespace Thelabdev\Laratlas\Models;
use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    /*
    |-------------------------------------------------------------------------
    | RELATIONSHIP
    |--------------------------------------------------------------------------
    */


    /**
     * get all streets of the ward
     */
    public function streets(){
        return $this->hasMany(Street::class);
    }

    /** get district belongs to a ward */
    public function district(){
        return $this->belongsTo(District::class);
    }
}
