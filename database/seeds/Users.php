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
            'username' => "adminToko",
            'email' => "adminToko@gmail.com",
            'email_verified_at' => NULL,
            'password' => Hash::make('adminToko'),
            'password-confirm' => "adminToko ",
            'gender' => "male",
            'dob' => "2000-01-01",
            'address' => "alamatAdminToko",
            'role' => 'admin',
            'remember_token' => NULL,
            'created_at' => '2020-12-09 06:15:36',
            'updated_at' => '2020-12-09 06:15:36',
        ]);
//        DB::table('users')->insert([
//            'username' => "petanicoba",
//            'email' => "petanicoba@gmail.com",
//            'email_verified_at' => NULL,
//            'password' => Hash::make('petanicoba'),
//            'password-confirm' => "petanicoba ",
//            'gender' => "male",
//            'dob' => "2000-01-01",
//            'address' => "alamatpetanicoba",
//            'role' => 'petani',
//            'remember_token' => NULL,
//            'created_at' => '2020-12-09 06:19:36',
//            'updated_at' => '2020-12-09 06:19:36',
//        ]);
    }
}
