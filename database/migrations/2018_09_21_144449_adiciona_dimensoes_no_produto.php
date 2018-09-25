<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaDimensoesNoProduto extends Migration
{

    public function up()
    {
        Schema::table('produtos', function ($table) {
            $table->string('tamanho', 100, 'Dimensões não informadas');
        });
    }


    public function down()
    {
        Schema::table('produtos', function ($table) {
            $table->dropColunm('tamanho');
        });
    }
}
