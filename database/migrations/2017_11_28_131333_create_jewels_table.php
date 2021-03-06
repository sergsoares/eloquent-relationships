<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJewelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jewels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('thief_id')->unsigned()->index()->nullable();
            $table->foreign('thief_id')->references('id')->on('thieves');
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
        Schema::dropIfExists('jewels');
    }
}
