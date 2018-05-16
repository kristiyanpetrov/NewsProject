<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            //$table->string('slug');
            $table->string('content_id');
            $table->string('author');
            $table->string('image_gallery');
            $table->string('rank');
            $table->integer('category')->unsigned()->default();
            $table->integer('tags')->unsigned()->defaulut();
            $table->timestamps();


            Schema::table('news', function($table) {
                $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
                $table->foreign('tags')->references('id')->on('tags')->onDelete('cascade');
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
