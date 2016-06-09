<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'company_id', 'class_id', 'description'];

    public function getClass()
    {
        return $this->belongsTo('App\ProductClass', 'class_id');

    }

    public function getCompany()
    {

        return $this->belongsTo('App\ProductCompany', 'company_id');
    }

    public function getType($id)
    {
        if ($id == 1) {
            return 'Residencial';
        } elseif ($id == 2) {
            return 'Micropyme';
        } elseif ($id == 3) {
            return 'Pyme';
        }
    }


    public function setImageAttribute($valor)
    {
        if (!empty($valor)) {
            $this->attributes['url_photo'] = $valor;
        }
    }

}
