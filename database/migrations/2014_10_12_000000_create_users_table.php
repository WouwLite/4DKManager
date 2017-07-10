<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');                       // Unique ID, Primary Key, *don't touch!*
            $table->integer('code');                        // Uniquely generated code (i.e. 20171234)
            $table->string('name');                         // Name (prefer: full name)
            $table->string('email')->unique();              // User email, must be unique in system
            $table->string('password');                     // User password
            $table->string('function');                     // Client function
            $table->tinyInteger('isApproved')->default(0);  // Extra validation for html forms (0 = false, 1 = true)
            $table->tinyInteger('admin')->default(0);       // Validate if user is an Admin (0 = false, 1 = true)
            $table->rememberToken();                                // Special string for password recovery, *don't touch!*
            $table->timestamps();                                   // Laravel TimeStamps, *don't touch!*
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
