<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('item_header_id');
            $table->integer('pallete_num')->nullable();
            $table->string('name');
            $table->integer('qty');
            $table->integer('remains');
            $table->string('item_note');
            $table->decimal('measure', 12, 2);
            $table->string('measure_note');
            $table->integer('price_per_measure');
            $table->integer('price_per_item');
            $table->timestamps();
            $table->softDeletes();
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
