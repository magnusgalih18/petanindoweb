<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtransactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id');
            $table->foreign('transaction_id')->references('id')->on('headertransactions');
            $table->foreignId('items_id');
            $table->foreign('items_id')->references('id')->on('items')->onDelete('cascade');
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransactions');
    }
}
