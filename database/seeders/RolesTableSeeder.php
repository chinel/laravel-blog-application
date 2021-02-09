<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(

            array(
                'title' => 'Admin',
                'description' => 'A Top Administrative user',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),


            array(
                'title' => 'Guest',
                'description' => 'A Registered user on the app',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )

        ));
    }
}
