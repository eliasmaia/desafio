<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_compras', function (Blueprint $table) {
            $table->id();
            $table->string('CPF');
            $table->string('private');
            $table->string('incompleto');
            $table->date('data_da_ultima_compra')->nullable();
            $table->string('ticket_medio')->nullable();
            $table->string('ticket_ultima_compra')->nullable();
            $table->string('loja_mais_frequente')->nullable();
            $table->string('loja_ultima_compra')->nullable();
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
        Schema::dropIfExists('dados_compras');
    }
};
