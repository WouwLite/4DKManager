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
            $table->increments('id');                          // Unique ID, Primary Key, don't touch!
            $table->integer('code', false, true);           // Client Code, i.e.: 20171234
            $table->string('name', 50);                 // Client name
            $table->string('email', 100)->unique();     // Client email, must be unique in system
            $table->string('function', 25);             // Client function
            $table->string('tent', 5);                  // Client tent number
            $table->string('field', 5);                 // Client flied
            $table->timestamps();                                      // Laravel TimeStamps, don't touch!
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
