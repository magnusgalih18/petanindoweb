<?php

use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/brocoli.jpg",
            'itemsname' => "Brokoli Segar 1kg",
            'itemsprice' => 35000,
            'itemsdescription' => "Brokoli Segar 1kg ",
        ]);
        DB::table('items')->insert([
            'id' => 2,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/cabbage.jpg",
            'itemsname' => "Kol Segar 500gram",
            'itemsprice' => 20000,
            'itemsdescription' => "Kol Segar 500gram ",
        ]);
        DB::table('items')->insert([
            'id' => 3,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/lettuce.jpg",
            'itemsname' => "Sawi Segar 500gram",
            'itemsprice' => 15000,
            'itemsdescription' => "Sawi Segar 500g ",
        ]);
        DB::table('items')->insert([
            'id' => 4,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/apple.jpg",
            'itemsname' => "Apel Segar 1kg",
            'itemsprice' => 25000,
            'itemsdescription' => "Apel Segar 1kg ",
        ]);
        DB::table('items')->insert([
            'id' => 5,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/banana.jpg",
            'itemsname' => "Pisang Raja 1 sisir",
            'itemsprice' => 30000,
            'itemsdescription' => "Pisang Raja 1 sisir",
        ]);
        DB::table('items')->insert([
            'id' => 6,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/grapes.jpg",
            'itemsname' => "Anggur Segar 250gram",
            'itemsprice' => 25000,
            'itemsdescription' => "Anggur Segar 250gram",
        ]);
        DB::table('items')->insert([
            'id' => 7,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/fish.jpg",
            'itemsname' => "Ikan Mas Segar 1kg",
            'itemsprice' => 40000,
            'itemsdescription' => "Ikan Mas Segar 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 8,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/beef.jpg",
            'itemsname' => "Daging Sapi 1kg",
            'itemsprice' => 50000,
            'itemsdescription' => "Daging Sapi Segar 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 9,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/chicken.jpg",
            'itemsname' => "Paha Ayam 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Paha Ayam Segar 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 10,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/beras.jpg",
            'itemsname' => "Beras Super 5kg",
            'itemsprice' => 50000,
            'itemsdescription' => "Beras Super 5kg",
        ]);
        DB::table('items')->insert([
            'id' => 11,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/mie.jpg",
            'itemsname' => "Mie Sedap 1 dus",
            'itemsprice' => 20000,
            'itemsdescription' => "Mie Sedap 1 Dus",
        ]);
        DB::table('items')->insert([
            'id' => 12,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/minyakgoreng.jpg",
            'itemsname' => "Minyak Goreng Bimoli",
            'itemsprice' => 15500,
            'itemsdescription' => "Minyak Goreng Bimoli",
        ]);
    }
}
