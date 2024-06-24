<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TabelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([//memasukkan data pada tabel users di localhost
            'name'=> 'fiya',  //akan terisi pd kolom nama, email, pass
            'email'=> 'tugas@gmail.com',
            'password'=> Hash::make('654321') //harus melakukan hashing jika langsung dimasukkan pass nya pada kolom pass maka pass tidak akan aman
        ]);
        //function run ini dibuat untuk melakukan proses memsaukkan data
    }
}
