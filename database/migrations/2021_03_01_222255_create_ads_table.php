<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description');
            $table->float('price');
            $table->string('street');
            $table->integer('postcode');
            $table->string('city');    
            $table->integer('surface');    
            $table->integer('room');
            $table->foreignId('category_id');    
            $table->foreign('category_id')->references('id')
                                        ->on('categories')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');    
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
        Schema::dropIfExists('ads');
    }
}
