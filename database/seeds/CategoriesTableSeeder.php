<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['Submitted', 'On Going', 'Completed'];

        foreach ($categories as $category) {
            Category::create([

                'name' => $category,
                      'order' => 1,
                    'slug' => '1',
                    'color' => '1',

                ]


            );
        }
    }
}
