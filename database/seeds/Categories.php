<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'id' => 1,
            'category_name' => "Sayuran",
            'category_Image' => "img/vegecategory.jpg",
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'category_name' => "Buah-Buahan",
            'category_Image' => "img/fruitcategory.jpg",
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'category_name' => "Daging",
            'category_Image' => "img/meatcategory.jpg",
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'category_name' => "Sembako",
            'category_Image' => "img/sembakocategory.jpg",
        ]);
    }
}
