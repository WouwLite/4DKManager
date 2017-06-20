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
            $table->increments('id');                          // Default id
            $table->string('device', 150)->required;    // Device name
            $table->string('ip', 20)->required;         // IP address
            $table->string('switch1', 20);              // Main connection switch
            $table->string('port1', 20);                // Port on specified switch
            $table->string('switch2', 20);              // Secondary connection switch
            $table->string('port2', 20);                // Port on secondary switch
            $table->integer('channel2', 4);       // WiFi channel 2.4GHz
            $table->integer('channel5', 4);       // WiFi channel 5GHz
            $table->string('location', 20);             // Device location
            $table->string('mac', 20)->required;        // MAC-address
            $table->string('dns', 20);                  // DNS address
            $table->string('username', 100);            // Management username
            $table->string('password', 100);            // Management password
            $table->string('manage-url', 20);           // Management URL
            $table->string('dhcptype', 20)->required;   // DHCP type (dynamic, static, fixed)
            $table->string('description', 150);         // Description
            $table->tinyInteger('byod');                       // Bring Your Own Device
            $table->tinyInteger('byod_approved');              // Bring Your Own Device approval
            $table->string('colour', 10);               // Cell colour
            $table->timestamps();                                      // Laravel timestamps, don't touch!
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
