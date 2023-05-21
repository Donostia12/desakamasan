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
        DB::table('produk')->insert([
            ['nama_produk'=>'Nasi Beguling Kamasan','informasi_produk'=>'Enak,murah muantap','harga_produk'=>15000,'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d780187.6029402488!2d135.07393627149537!3d35.04810489747583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6001a8d6cd3cc3f1%3A0xc0961d366bbb1d3d!2sKyoto%2C%20Prefektur%20Kyoto%2C%20Jepang!5e0!3m2!1sid!2sid!4v1684636913245!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade','image'=>'a730cf740208afab144bdf75692a7494DesaKamasannijika.jpg']
            ]);
        
    }
}
