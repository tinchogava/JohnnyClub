<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->text('description');
            $table->integer('size');
            $table->decimal('price', 5, 2);
            $table->string('image', 300);
            $table->boolean('visible');
            $table->integer('category_id')->unsigned();
            
            $table->integer('varietal_id')->unsigned();
            
            $table->integer('winery_id')->unsigned();
            
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table){
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
            $table->foreign('varietal_id')
                  ->references('id')
                  ->on('varietals');
            $table->foreign('winery_id')
                  ->references('id')
                  ->on('wineries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
