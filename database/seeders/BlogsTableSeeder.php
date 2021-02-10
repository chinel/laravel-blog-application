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
            ,
            array(
                'title' => "Are almonds a healthy option, or wasting water?",
                'description' => "Almond butter had penetrated the market to challenge peanut butter as the only game in town. But then, a scathing report brought the concept of a food’s ‘water footprint’ into the mainstream, and the almond became a poster child of foods that require an irresponsibly high amount of water. A water footprint is the amount of water involved in growing, processing, and delivering a product to us.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'title' => "Are vegan and vegetarian diets healthy for children?",
                'description' => "According to the Academy of Nutrition and Dietetics, there is no reason why a vegan diet shouldn’t provide an infant with an appropriate amount of nutrients. It is the position of the Academy of Nutrition and Dietetics that appropriately planned vegetarian, including vegan, diets are healthful, nutritionally adequate, and may provide health benefits for the prevention and treatment of certain diseases, the organisation states.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
            ,
            array(
                'title' => "Tomato and tarragon salad with tapenade toast, recipe",
                'description' => "Tapenade is a French olive paste and can be eaten as a dip or spread. This recipe is great for sharing as a starter or light lunch. It will make more tapenade than you’ll need for one meal, but it’s not worth making less, and it keeps well for a few days in the fridge. You could use shop-bought tapenade if you prefer, although making your own is easy and satisfying.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'title' => "Five things to cut out of your diet for a better night’s sleep",
                'description' => "Nothing beats waking up from a good night’s sleep yet, for many of us, the idea of that happening seems like a dream. Sleep deprivation can affect your memory, productivity and overall happiness, so it is essential that you are well-rested. Eating earlier in the day, preparing light meals for dinner and altering your diet are just a few simple changes that could revolutionise your sleeping pattern.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ),
            array(
                'title' => "10 simple ways to manage sugar cravings, according to a nutritionist",
                'description' => "One of the reasons why so many people end up eating unhealthy snacks is simply because they don’t consider taking the time to source healthier alternatives. Sepel advises preparing wholesome snacks over the weekend for the week ahead so that this isn’t an issue.",
                'user_id' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )

        ));
    }
}
