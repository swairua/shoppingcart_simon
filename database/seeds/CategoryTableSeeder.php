<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = array(
            array("category_name" => "Sport", "slug" => "Sport"),
            array("category_name" => "Casual", "slug" => "Casual")
        );

        foreach ($categories as $category)
        {
            Category::create($category);
        }
    }
}
