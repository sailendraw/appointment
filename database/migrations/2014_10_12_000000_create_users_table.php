<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Doctrine\Common\ClassLoader;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $this->create_user_table();
       $this->create_table_role();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('roles');
    }
    public function create_user_table()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role')->nullable();;
            $table->rememberToken();
            $table->timestamps();
        });

   }
   public function create_table_role()
   {
       Schema::create('roles',function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('created_by');
           $table->timestamps();




       });


   }
}
