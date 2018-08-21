<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = array(
            array("category_id" => 1 ,"slug" => "Sport-1", "product_name" => "Sport 1", "product_detail" => "Sport Detail", "product_price" => 100),
            array("category_id" => 2, "slug" => "Casual-1", "product_name" => "Casual 1", "product_detail" => "Casual Detail", "product_price" => 1000)
        );

        foreach ($products as $product)
        {
            Product::create($product);
        }
    }
}
