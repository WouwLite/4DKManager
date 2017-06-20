<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('errors', function (Blueprint $table) {
            $table->increments('id');       // Unique ID, Primary Key, don't touch!
            $table->string('title');        // Ticket title
            $table->string('body');         // Ticket body
            $table->integer('status', false, true);      // Ticket status
            $table->string('solution');     // Ticket solution
            $table->timestamps();           // Laravel TimeStamps, don't touch!
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('errors');
    }
}
