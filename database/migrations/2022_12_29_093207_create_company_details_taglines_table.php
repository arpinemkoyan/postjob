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
        Schema::create('company_details_taglines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_details_id')->unsigned();
            $table->string("tagline");
            $table->timestamps();

            $table->foreign('company_details_id')->references('id')->on('company_details')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_details_taglines');
    }
};
