<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            ['username' => 'donostia','password' => Hash::make('donospro12')],
            ['username' => 'wage', 'password' => Hash::make('wagewika12')],
            ['username' => 'katon', 'password' => Hash::make('samsung12')],
            ['username' => 'surin', 'password' => Hash::make('jdnd12')]
        ]);
        
    }
}
