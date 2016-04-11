<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'company_id', 'description'];

    public function getClass(){

        return $this->belongsTo('App\ProductClass', 'class_id');

    }
}
