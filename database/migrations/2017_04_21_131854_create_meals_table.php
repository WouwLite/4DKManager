<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');               // Unique ID, Primary Key, don't touch!
            $table->date('date');                   // Date for selected meals from FK (i.e. 21-04-2017)
            $table->integer('client_id');           // Foreign Key Client ID
            $table->integer('breakfast');           // Breakfast allowed or not (1/0)
            $table->integer('lunch');               // Lunch allowed or not (1/0)
            $table->integer('dinner');              // Dinner allowed or not (1/0)
            $table->integer('nightsnack');          // Nightsnack allowed or not (1/0)
            $table->timestamps();                           // Laravel TimeStamps, don't touch!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
