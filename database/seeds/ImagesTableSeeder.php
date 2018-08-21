<?php

use App\Images;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $images = array(
            array("name" => "s1.jpg", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "s2.jpg", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "s3.jpg", "imageable_id" => 1, "imageable_type" => "App\Product"),
            array("name" => "c1.jpg", "imageable_id" => 2, "imageable_type" => "App\Product"),
            array("name" => "c2.jpg", "imageable_id" => 2, "imageable_type" => "App\Product"),
            array("name" => "c3.jpg", "imageable_id" => 2, "imageable_type" => "App\Product"),
        );

        foreach ($images as $image)
        {
            Images::create($image);
        }
    }
}
