<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('networks', function (Blueprint $table) {
            $table->increments('id');               // Default id
            $table->string('device')->required;     // Device name
            $table->string('ip')->required;         // IP address
            $table->string('switch1');              // Main connection switch
            $table->string('port1');                // Port on specified switch
            $table->string('switch2');              // Secondary connection switch
            $table->string('port2');                // Port on secondary switch
            $table->string('channel');              // WiFi channel
            $table->string('location');             // Device location
            $table->string('mac')->required;        // MAC-address
            $table->string('dns');                  // DNS address
            $table->string('username');             // Management username
            $table->string('password');             // Management password
            $table->string('manage-url');           // Management URL
            $table->string('dhcptype')->required;   // DHCP type (dynamic, static, fixed)
            $table->string('description');          // Description
            $table->string('colour');               // Cell colour
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
        Schema::dropIfExists('networks');
    }
}
