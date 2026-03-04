<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'Iphone 15 Pro Max',
            'liga_id' => 1,
            'gambar' => 'ip 15 pro max.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Iphone 15 Pro',
            'liga_id' => 1,
            'gambar' => 'ip 15 pro.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Iphone 15 Plus',
            'liga_id' => 1,
            'gambar' => 'ip 15 plus.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Iphone 15',
            'liga_id' => 1,
            'gambar' => 'ip 15.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Samsung s24 Plus',
            'liga_id' => 2,
            'gambar' => 'samsung s24 plus.jpeg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Samsung s24 Ultra',
            'liga_id' => 2,
            'gambar' => 'samsung s24 ultra.jpeg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Oppo Find N3 Flip',
            'liga_id' => 3,
            'gambar' => 'oppo find n3 flip.jpeg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'Oppo Reno f11',
            'liga_id' => 3,
            'gambar' => 'Oppo reno f11.png'
        ]);
    }
}
