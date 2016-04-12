<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'company_id', 'class_id' ,'description'];

    public function getClass(){

        return $this->belongsTo('App\ProductClass', 'class_id');

    }

    public function getCompany(){

        return $this->belongsTo('App\ProductCompany', 'company_id');
    }
}
