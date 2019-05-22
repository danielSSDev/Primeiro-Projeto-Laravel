<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = ['tipo'];

    public function imoveis()
    {
        return $this->hasMany('App\Tipo', 'tipo_id');
    }
}