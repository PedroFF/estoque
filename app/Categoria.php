<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    public function produtos(){
       return $this->hasMany('estoque\Produto');
    }
}
