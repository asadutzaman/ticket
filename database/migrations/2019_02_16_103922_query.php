<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Query extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('query', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department'); //varchar(255)
            $table->string('phone');
            $table->string('c_name');
            $table->string('c_email');
            $table->string('query_sub');
            $table->string('query_details');
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
        Schema::dropIfExists('query');
    }
}
