<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContasPagarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contasPagar', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome', 50);
            $table->string('status', 1);
            $table->decimal('valor', 10, 2);
            $table->decimal('valorpago', 10, 2);
            $table->date('data');
            $table->date('datapagamento');
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
        Schema::dropIfExists('contasPagar');
    }
}
