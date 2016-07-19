<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->integer('zip_code');
            $table->integer('state_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('state_id')
                  ->references('id')
                  ->on('states');
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
