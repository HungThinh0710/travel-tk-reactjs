<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++)
        {
            DB::table('tour')->insert([
                'name' => Str::random(10),
                'price' => 123123123,
                'address' => Str::random(10),
                'status' => 'Active',
                'start_time' => \Carbon\Carbon::now(),
                'end_time' => \Carbon\Carbon::now(),
                'types' => 'xyz',
                'services' => '1|2|3|4',
                'desc' => 'hihi'

            ]);

        }
    }
}
