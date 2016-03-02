<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';


    public function getClass(){

        return $this->belongsTo('App\ProductClass', 'class_id');

    }
}
