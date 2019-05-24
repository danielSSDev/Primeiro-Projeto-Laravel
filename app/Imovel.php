<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'tipo_id',
        'tipo_id',
        'cidade_id',
        'cidade_id',
        'titulo',
        'descricao',
        'imagem',
        'status',
        'endereco',
        'cep',
        'valor',
        'dormitorios',
        'detalhes',
        'mapa',
        'visualizacoes',
        'publicar'
    ];

    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade');
    }

    public function galeria()
    {
        return $this->hasMany('App\Galeria','imovel_id');
    }
}
