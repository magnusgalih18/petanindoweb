<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('itemsimage');
            $table->string('itemsname');
            $table->integer('itemsprice');
            $table->text('itemsdescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
