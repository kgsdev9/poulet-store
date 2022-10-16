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
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->unsignedBigInteger('duration_location_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('duration_location_id')->references('id')->on('duration_locations');
            $table->foreign('article_id')->references('id')->on('articles');
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

        Schema::table('tarifications', function(Blueprint $table){
           $table->dropForeign('duration_location_id');
           $table->dropForeign('article_id');
        });
        Schema::dropIfExists('tarifications');
    }
};
