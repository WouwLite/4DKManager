<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functions', function (Blueprint $table) {
            $table->increments('id');               // Unique ID, Primary Key, don't touch!
            $table->string('function');             // Function names
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
