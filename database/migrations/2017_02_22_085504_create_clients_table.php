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

            // Integers & Foreign Key's
            $table->integer('code', false, true);           // Client Code, i.e.: 20171234
            $table->integer('function_id', false, true);    // FK Functions table
            $table->integer('country_id', false, true);     // FK Countries table

            // General info columns
            $table->string('name', 50);                 // Firstname
            $table->string('lastname', 50);             // Lastname (incl. middle names like 'van der')
            $table->string('email', 100)->unique();     // Email address, must be unique in system
            $table->string('tent', 5);                  // Tentnumber
            $table->string('field', 5);                 // Tentfield (placement)

            // Address columns
            $table->string('address', 25);              // Address (street & no.)
            $table->string('postalcode', 10);           // Postalcode
            $table->string('city', 25);                 // City
            $table->string('county', 25);               // County / province

            // Medical columns
            $table->string('diets', 150);                // Client diets
            $table->string('allergies', 150);           // Client allergies

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
