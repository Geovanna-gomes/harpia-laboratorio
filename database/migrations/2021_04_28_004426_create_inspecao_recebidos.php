<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspecaoRecebidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecao_recebidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('produto_id');
            $table->string('fornecedor', 70);
            $table->string('fabricante', 70);
            $table->string('nota_fiscal', 30);
            $table->string('lote', 30)->nullable();
            $table->text('descricao_teste')->nullable();
            $table->enum('insumo_liberado',['sim','não']);
            $table->text('justificativa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inspecao_recebidos');
    }
}
