<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "petanindo",
            'email' => "petanindo@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('petanindo'),
            'password-confirm' => "petanindo ",
            'gender' => "male",
            'dob' => "2000-01-01",
            'address' => "Jl. Raya Kb. Jeruk No.27, RT.2/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530",
            'role' => 'sellers',
            'remember_token' => NULL,
            'created_at' => '2020-12-09 06:15:36',
            'updated_at' => '2020-12-09 06:15:36',
        ]);
    }
}
