<?php

namespace Unleashed;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    //Table Name
    protected $table = 'products';
    //Primary Key
    public $primaryKey = 'id';
    //TimeStamps
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('Unleashed\User');
    }
    function review() {
        return $this->hasMany('Unleashed\Review');
    }
}
