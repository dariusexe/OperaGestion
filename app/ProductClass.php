<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{
    protected $table = 'products_class';
    protected $fillable = ['name'];
    public $timestamps = false;


}
