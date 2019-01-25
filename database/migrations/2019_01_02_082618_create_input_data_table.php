<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id');
            $table->integer('select_category')->nullable()->default(1);
            $table->string('pallete_num')->nullable();
            $table->string('item_name');
            $table->string('select_weight');
            $table->decimal('weight_each',12,2);
            $table->decimal('weight_total',12,2);
            $table->string('select_volume');
            $table->decimal('p',12,2);
            $table->decimal('l',12,2);   
            $table->decimal('t',12,2); 
            $table->decimal('volume_total',12,2);
            $table->integer('item_qty');
            $table->string('unit_name'); 
            $table->string('select_price');
            $table->integer('price_per_kg');
            $table->integer('price_per_m');   
            $table->integer('price_per_item');
            $table->integer('price_minimum');
            $table->integer('select_payment');
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
        Schema::dropIfExists('input_data');
    }
}
