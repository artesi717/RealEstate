<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->integer('bed');
            $table->integer('showers');
            $table->integer('size');
            $table->integer('status')->default('0');
            $table->integer('primary')->default('0');
            $table->string('location');
            $table->string('property_type');
            $table->integer('price');
            $table->string('image');
            $table->integer('year');
            $table->string('rental');
            $table->string('address');
            $table->string('description');
            $table->timestamps();
            $table->index('user_id');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}


