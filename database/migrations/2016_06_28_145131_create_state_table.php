<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->integer('country_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('states', function (Blueprint $table) {
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
        Schema::drop('states');   
    }
}
