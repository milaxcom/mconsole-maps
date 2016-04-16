<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('map_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('name');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('zip');
            $table->string('phone');
            $table->string('web');
            $table->text('comment');
            $table->boolean('enabled')->default(true);
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
        Schema::drop('places');
    }
}
