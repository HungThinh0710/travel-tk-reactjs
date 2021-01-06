<?php

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        {
            DB::table('staff')->insert([
                'username' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('123123'),
                'role_id' => mt_rand(1, 5),
            ]);
        }
    }
}
