<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedBigInteger('company_id');
            $table->string('location');
            $table->string('category');
            $table->string('job-tag');
            $table->string('descrition');
            $table->string('email-url');
            $table->dateTime('closing-date');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('posts');
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
};
