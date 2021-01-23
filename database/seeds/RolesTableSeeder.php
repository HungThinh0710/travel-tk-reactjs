<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++)
        {
            DB::table('roles')->insert([
                'roles_name' => Str::random(10)
//                'phone' => '',
            ]);
        }
    }
}
