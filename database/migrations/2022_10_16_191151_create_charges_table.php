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
        Schema::create('charges', function (Blueprint $table) {
            $table->id();
            $table->double('price_charge');
            $table->dateTime('date_billable');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('location_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('location_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('charges', function(Blueprint $table){
        $table->dropForeign('user_id', 'location_id');
        });
        Schema::dropIfExists('charges');
    }
};
