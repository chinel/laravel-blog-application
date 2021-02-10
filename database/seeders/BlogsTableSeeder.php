<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert(array(

            array(
                'title' => 'Robo-dog Spot cleans, gardens and skips',
                'description' => "Boston Dynamics's Spot robot can now be fully remote-controlled from anywhere in the world, using a web browser-based platform called Scout. Previously it needed to be controlled via a bespoke tablet, which meant the operator had to be nearby. To mark the announcement, the firm - which was recently taken over by Hyundai - has released video showing it being put to new uses included gardening, tidying the home and - for some reason - jumping over a skipping rope",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),


            array(
                'title' => "School-Made Lunch Better for Children",
                'description' => "Packing a lunchbox with fruit, sandwiches, and snacks is common practice for most Australian families. But what if there was another way? Researchers investigating the pros and cons of school-provided lunches say uniform delivery of lunchtime food at school could be a solution to better childhood nutrition.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )

        ));
    }
}
