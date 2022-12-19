<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('plate',$length=7)->comment('Placa de identifacacao');
            $table->string('model')->comment('Modelo do veiculo');
            $table->string('version')->nullable()->comment('Versao do veiculo');
            $table->string('year',$length=4)->nullable()->comment('Ano de fabricacao');
            $table->text('note')->nullable()->comment('Observacoes sobre o veiculo');
            $table->unsignedBigInteger('user_id')->comment('');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
};
