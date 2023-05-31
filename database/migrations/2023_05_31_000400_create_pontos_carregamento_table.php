<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePontosCarregamentoTable extends Migration
{
    public function up()
    {
        Schema::create('pontos_carregamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carregamento_id');
            $table->string('produtor');
            $table->timestamps();

            $table->foreign('carregamento_id')->references('id')->on('carregamentos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pontos_carregamento');
    }
}
