<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('category')->delete();

        $faker = Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            Category::create([
                'title' => $faker->jobTitle ,
                'status'  => 1,
            ]);
        }
    }
}