<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarregamentoProdutorTableV2 extends Migration
{
    public function up()
    {
        Schema::create('carregamento_produtor', function (Blueprint $table) {
            $table->unsignedBigInteger('carregamento_id');
            $table->unsignedBigInteger('produtor_id');
            $table->integer('quantidade');

            $table->foreign('carregamento_id')->references('id')->on('carregamentos')->onDelete('cascade');
            $table->foreign('produtor_id')->references('id')->on('produtores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('carregamento_produtor');
    }
}
