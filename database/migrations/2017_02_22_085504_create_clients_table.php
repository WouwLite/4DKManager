<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code');
            $table->string('name', 50);
            $table->string('email', 100)->unique();
            $table->string('function', 50);
            $table->integer('mealPreFridayBreakfast')->default(0);
            $table->integer('mealPreFridayLunch')->default(0);
            $table->integer('mealPreFridayDiner')->default(0);
            $table->integer('mealPreSaturdayBreakfast')->default(0);
            $table->integer('mealPreSaturdayLunch')->default(0);
            $table->integer('mealPreSaturdayDiner')->default(0);
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
        Schema::dropIfExists('clients');
    }
}
