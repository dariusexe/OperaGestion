<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name', 'lastName', 'identification', 'type', 'phone', 'email', 'legalPartner', 'CIFLegalPartner', 'country', 'city', 'address', 'PC', 'IBAN', 'contactPerson', 'contactPhone', 'comentary'];

    public function getFullName()
    {
        return $this->attributes['name'] . " " . $this->attributes['lastName'];
    }

    public function getType()
    {
        if ($this->attributes['type'] == 0) {
            return "Pyme";
        } else {
            return "Residencial";
        }
    }
}
