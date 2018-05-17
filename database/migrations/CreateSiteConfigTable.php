<?php
/**
 * Created by PhpStorm.
 * User: sailendra-dev
 * Date: 10/05/18
 * Time: 12:44 PM
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSiteConfigTable extends Migration
{
    public function up()
    {
        Schema::create('site_config',function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('slogan');
        });

    }
    public function down()
    {
        Schema::dropIfExists('site_config');
    }
}