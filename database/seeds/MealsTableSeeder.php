<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert([
            'date' => '2017-07-04',
            'client_id' => random_int(1,9),
            'breakfast' => '0',
            'lunch' => '1',
            'dinner' => '2',
            'nightsnack' => '0',
            'created_at' => '2017-07-04 19:56:18',
            'updated_at' => '2017-07-04 19:56:18',
        ]);
    }
}
