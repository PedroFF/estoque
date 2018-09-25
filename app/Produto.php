<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categoria(){
        return $this->belongsTo('estoque\Categoria');
    }
    public $timestamps = false;

    protected $fillable = array('nome', 'valor', 'descricao', 'quantidade', 'tamanho','categoria_id');
}
