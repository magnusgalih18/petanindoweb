<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([Categories::class]);
        $this->call([DetailTransactions::class]);
        $this->call([HeaderTransactions::class]);
        $this->call([Users::class]);
        $this->call([Sellers::class]);
        $this->call([Items::class]);
    }
}
