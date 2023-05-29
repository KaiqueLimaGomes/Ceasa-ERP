<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaixasVerdurasCarregamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixas_verduras_carregamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carregamento_id');
            $table->unsignedBigInteger('produtor_id');
            $table->integer('quantidade');
            // Adicione as colunas adicionais necessárias para a tabela "caixas_verduras_carregamento"
            $table->timestamps();

            $table->foreign('carregamento_id')->references('id')->on('carregamentos')->onDelete('cascade');
            $table->foreign('produtor_id')->references('id')->on('produtores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixas_verduras_carregamento');
    }
}
