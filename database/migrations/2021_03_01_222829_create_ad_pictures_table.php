<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_pictures', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            // $table->foreignId('ad_id')->default(1);
            // $table->foreign('ad_id')->references('id')
            //                         ->on('ads')
            //                         ->onUpdate('cascade')
            //                         ->onDelete('cascade'); 
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
        Schema::dropIfExists('ad_pictures');
    }
}
