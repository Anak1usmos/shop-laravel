<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Action extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action', function (Blueprint $table) {
            $table->integer('id')->index()->unsigned()->autoIncrement();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('property_id')->unsigned();
            $table->string('value');
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('property_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
