<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateGeolocationPointsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.geolocation.data.geolocation-point.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('localizable_type')->nullable();
            $table->integer('localizable_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.geolocation.data.geolocation-point.table'));
    }
}
