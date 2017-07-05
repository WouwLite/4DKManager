<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'code'   => '20001001',
            'name'          => 'test'.str_random(10),
            'lastname'      => str_random(10),
            'email'         => str_random(10).'@gmail.com',
            'functions_id'  => '3',
            'country_id'    => '1',
            'tent'          => '95',
            'field'         => 'Z',
            'address'       => str_random(10).'straat 1',
            'postalcode'    => '6500 AD',
            'city'          => 'Nijmegen',
            'province'      => 'Gelderland',
        ]);
    }
}