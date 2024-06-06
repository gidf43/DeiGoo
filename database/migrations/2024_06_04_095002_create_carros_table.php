<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->dateTime('data')->nullable();
            $table->string('acentos');
            $table->string('portas');
            $table->string('Quilometragem');
            $table->string('Abastecimento');
            $table->string('Transmissão');
            $table->String('descricao',2550)->nullable();
            $table->String('imagem_carro');
            $table->foreignId('preco_id')->constrained('precos')->nullable()->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
};
