<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //Table Name Change
    protected $table='reviews';
    //Primary Key Change
    public $primaryKey = 'id';
    //TimeStamp set up
    public $timestamps = true;

    function product() {
        return $this->belongsTo('App\Product');
    }
}
