<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWakeTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wake_times', function (Blueprint $table) {
            $table->increments('id');                                                  // Unique ID, Primary Key, don't touch!

            // Foreign Key
            $table->integer('client_id', false, true);           // Foreign Key Client ID

            // Data
            $table->date('date');                                                      // Date for wake-up time from FK (i.e. 21-04-2017)
            $table->string('time', 6);                                          // Wake-up time
            $table->string('info', 150)l;                                       // Additional info

            $table->timestamps();                                                              // Laravel TimeStamps, don't touch!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wake_times');
    }
}
