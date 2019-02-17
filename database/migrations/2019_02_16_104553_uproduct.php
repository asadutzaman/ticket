<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Uproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department'); //varchar(255)
            $table->string('phone');
            $table->string('c_name');
            $table->string('product_name');
            $table->string('product_sub');
            $table->string('product_details');
            $table->string('assign');
            $table->string('comment');
            $table->string('status');
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
        Schema::dropIfExists('uproduct');
    }
}
