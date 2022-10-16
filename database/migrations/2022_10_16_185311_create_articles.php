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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('libelle_serie');
            $table->string('url_image')->nullable();
            $table->boolean('available')->default(1);
            $table->unsignedBigInteger('type_article_id');
            $table->foreign('type_article_id')->references('id')->on('type_articles');
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
        Schema::table('articles', function(Blueprint $table){
            $table->dropForeign('type_article_id');
        });
        Schema::dropIfExists('articles');
    }
};
