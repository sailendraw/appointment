<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time');
            $table->integer('doctor')->unsigned();
            $table->integer('userid')->unsigned();
            $table->text('description');
            $table->timestamps();
        });
        Schema::table('appointments',function (Blueprint $table)
        {
          $table->foreign('doctor')->references('id')->on('doctors');


        });
        Schema::table('appointments',function(Blueprint $table){
            $table->foreign('userid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
