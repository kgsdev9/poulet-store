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
        Schema::create('article_propriete', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('propriete_id');
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('propriete_id')->references('id')->on('propriete_articles');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_propriete', function(Blueprint $table){
            $table->dropForeign('article_id');
            $table->dropForeign('propriete_id');
         });
        Schema::dropIfExists('article_propriete');
    }
};
