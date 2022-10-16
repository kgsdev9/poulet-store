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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('sirname');
            $table->date('date_of_naissance');
            $table->string('here_naissance');
            $table->string('country');
            $table->string('city');
            $table->string('adress');
            $table->string('phone_number_one');
            $table->string('phone_number_two')->nullable();
            $table->char('gender');
            $table->string('password_identity');
            $table->string('number_identity'); 
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
        Schema::dropIfExists('suppliers');
    }
};
