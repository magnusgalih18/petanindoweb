<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'category_id' => 1,
            'itemsimage' => "img/item/buncis.jpg",
            'itemsname' => "Buncis Segar 1kg",
            'itemsprice' => 17000,
            'itemsdescription' => "Buncis Segar 1kg ",
        ]);

        DB::table('items')->insert([
            'id' => 5,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/kangkung.jpg",
            'itemsname' => "Kangkung Segar 1kg",
            'itemsprice' => 35000,
            'itemsdescription' => "Kangkung Segar 1kg ",
        ]);

        DB::table('items')->insert([
            'id' => 6,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/wortel.jpg",
            'itemsname' => "Wortel Segar 1kg",
            'itemsprice' => 25000,
            'itemsdescription' => "Wortel Segar 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 7,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/tomat.png",
            'itemsname' => "Tomat Segar 1kg",
            'itemsprice' => 20000,
            'itemsdescription' => "Tomat Segar 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 8,
            'seller_id' => 1,
            'category_id' => 1,
            'itemsimage' => "img/item/terong.jpg",
            'itemsname' => "Terong Segar 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Terong Segar 1kg",
        ]);



        DB::table('items')->insert([
            'id' => 9,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/banana.jpg",
            'itemsname' => "Pisang 1 sisir",
            'itemsprice' => 25000,
            'itemsdescription' => "Pisang 1 sisir",
        ]);

        DB::table('items')->insert([
            'id' => 10,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/grapes.jpg",
            'itemsname' => "Anggur merah segar 1 sisir",
            'itemsprice' => 40000,
            'itemsdescription' => "Anggur merah segar 1 sisir",
        ]);
        DB::table('items')->insert([
            'id' => 11,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/apple.jpg",
            'itemsname' => "Apel segar 1 kg",
            'itemsprice' => 80000,
            'itemsdescription' => "Apel segar 1 kg",
        ]);
        DB::table('items')->insert([
            'id' => 12,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/jeruk.jpg",
            'itemsname' => "Jeruk sunkist Segar 1kg",
            'itemsprice' => 70000,
            'itemsdescription' => "Jeruk sunkist Segar 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 13,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/mangga.jpg",
            'itemsname' => "Mangga 1kg",
            'itemsprice' => 60000,
            'itemsdescription' => "Mangga 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 14,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/pir.jpg",
            'itemsname' => "pir 1Kg",
            'itemsprice' => 60000,
            'itemsdescription' => "Pir 1kg",
        ]);
        DB::table('items')->insert([
            'id' => 15,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/jambu.jpeg",
            'itemsname' => "Jambu 1kg",
            'itemsprice' => 55500,
            'itemsdescription' => "Jambu 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 16,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/melon.jpg",
            'itemsname' => "Melon 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Melon 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 17,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/buahnaga.jpg",
            'itemsname' => "Buah Naga",
            'itemsprice' => 30000,
            'itemsdescription' => "Buah Naga",
        ]);

        DB::table('items')->insert([
            'id' => 18,
            'seller_id' => 1,
            'category_id' => 2,
            'itemsimage' => "img/item/durian.jpg",
            'itemsname' => "Durian Montong 1 sisir",
            'itemsprice' => 80000,
            'itemsdescription' => "Durian Montong 1 sisir",
        ]);

        DB::table('items')->insert([
            'id' => 19,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/fish.jpg",
            'itemsname' => "Ikan mas segar 1kg",
            'itemsprice' => 40000,
            'itemsdescription' => "Ikan mas segar 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 20,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/beef.jpg",
            'itemsname' => "Daging Sapi 1kg",
            'itemsprice' => 50000,
            'itemsdescription' => "Daging Sapi 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 21,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/chicken.jpg",
            'itemsname' => "Paha Ayam 1Kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Paha Ayam 1Kg",
        ]);

        DB::table('items')->insert([
            'id' => 22,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/igasapi.jpg",
            'itemsname' => "Iga sapi 1kg",
            'itemsprice' => 40000,
            'itemsdescription' => "Iga sapi 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 23,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/igababi.jpg",
            'itemsname' => "Iga Babi 1kg",
            'itemsprice' => 40000,
            'itemsdescription' => "Iga Babi 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 24,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/sayapayam.jpg",
            'itemsname' => "Sayap Ayam 1kg",
            'itemsprice' => 35000,
            'itemsdescription' => "Sayap Ayam 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 25,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/dagingdomba.jpg",
            'itemsname' => "Daging domba 1kg",
            'itemsprice' => 50000,
            'itemsdescription' => "Daging domba 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 26,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/dagingbebek.jpg",
            'itemsname' => "Daging Bebek 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Daging Bebek 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 27,
            'seller_id' => 1,
            'category_id' => 3,
            'itemsimage' => "img/item/pahabebek.jpg",
            'itemsname' => "Paha Bebek 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Paha Bebek 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 28,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/beras.jpg",
            'itemsname' => "Beras Super 5Kg",
            'itemsprice' => 50000,
            'itemsdescription' => "Beras super 5kg",
        ]);

        DB::table('items')->insert([
            'id' => 29,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/mie.jpg",
            'itemsname' => "Mie Sedap 1 dus",
            'itemsprice' => 20000,
            'itemsdescription' => "Mie Sedap 1 dus",
        ]);

        DB::table('items')->insert([
            'id' => 30,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/minyakgoreng.jpg",
            'itemsname' => "Minyak Goreng bimoli",
            'itemsprice' => 15500,
            'itemsdescription' => "Minyak Goreng bimoli",
        ]);

        DB::table('items')->insert([
            'id' => 31,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/teh.jpg",
            'itemsname' => "Teh Sariwangi",
            'itemsprice' => 20000,
            'itemsdescription' => "Teh Sariwangi",
        ]);

        DB::table('items')->insert([
            'id' => 32,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/gulapasir.jpg",
            'itemsname' => "Gula Pasir 1kg",
            'itemsprice' => 8000,
            'itemsdescription' => "Gula Pasir 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 33,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/garam.jpg",
            'itemsname' => "Garam 1kg",
            'itemsprice' => 20000,
            'itemsdescription' => "Garam 1kg",
        ]);

        DB::table('items')->insert([
            'id' => 34,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/kopi.jpg",
            'itemsname' => "Kopi Kapal Api 1 bungkus",
            'itemsprice' => 30000,
            'itemsdescription' => "Kopi Kapal Api 1 bungkus",
        ]);

        DB::table('items')->insert([
            'id' => 35,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/susu.png",
            'itemsname' => "Susu Frisian Flag 1 kotak",
            'itemsprice' => 50000,
            'itemsdescription' => "Susu Frisian Flag 1 kotak",
        ]);

        DB::table('items')->insert([
            'id' => 36,
            'seller_id' => 1,
            'category_id' => 4,
            'itemsimage' => "img/item/telur.jpg",
            'itemsname' => "Telur Ayam 1kg",
            'itemsprice' => 30000,
            'itemsdescription' => "Telur Ayam 1kg",
        ]);

        
    }
}
