<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{
    protected $table = 'products_class';

    public function products(){
        return $this->hasMany('App\Product', 'class_id');
    }
}
