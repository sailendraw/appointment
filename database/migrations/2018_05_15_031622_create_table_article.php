<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
                $table->increments('id');
                $table->string('article_name',50);
                $table->string('keyword',50);
                $table->integer('user_id')->nullable();
                $table->string('description',16000);
                $table->boolean('publish')->default(false);
                $table->boolean('delete_flag')->default(false);
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
