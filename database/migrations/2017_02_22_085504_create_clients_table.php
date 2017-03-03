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
            $table->increments('id');                   // Unique ID, Primary Key, don't touch!
            $table->integer('code');                    // Client Code, i.e.: 20171234
            $table->string('name', 50);                 // Client name
            $table->string('email', 100)->unique();     // Client email, must be unique in system
            $table->string('function', 50);             // Client function
            $table->string('tent');                     // Client tent number
            $table->string('field');                    // Client flied
            $table->integer('mealB001')->default(0);    // Meal Breakfast day 1
            $table->integer('mealL001')->default(0);    // Meal Lunch day 1
            $table->integer('mealD001')->default(0);    // Meal Dinner day 1
            $table->integer('mealD002')->default(0);    // Meal Breakfast day 2
            $table->integer('mealD002')->default(0);    // Meal Lunch day 2
            $table->integer('mealD002')->default(0);    // Meal Dinner day 2
            $table->timestamps();                       // Laravel TimeStamps, don't touch!
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
