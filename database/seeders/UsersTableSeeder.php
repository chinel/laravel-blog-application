<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(

            array(
                'firstname' => 'Top',
                'lastname' => 'Admin',
                'email' => 'admin@blog.com',
                'role_id' => 1,
                'active' => 1,
                'password' => bcrypt('ADMIN12345'),
                'remember_token' => null,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),



        ));  DB::table('users')->insert(array(

        array(
            'firstname' => 'Top',
            'lastname' => 'Admin',
            'email' => 'admin@blog.com',
            'role_id' => 1,
            'active' => 1,
            'password' => bcrypt('ADMIN12345'),
            'remember_token' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ),



    ));
    }
}
