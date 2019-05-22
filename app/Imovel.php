<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = "imoveis";

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade');
    }
}
