<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['Shoes', 'Bags', 'Sneakers'];

        for($i=0; $i<=2; $i++){
            DB::table('products')->insert([
                 'name'=>$products[$i],
                 'identifier'=>uniqid(true),
                 'quantity'=>rand(0, 9)
            ]);
        }
    }
}
