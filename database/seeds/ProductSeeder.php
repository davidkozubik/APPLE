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
            'vyrobce' => 'Apple',
            'model' => 'iPhone 7 Plus',
            'barva' => 'Matte black',
            'pamet' => '32 GB',
            'popis' => '3 GB RAM, portrait mode, Apple A10 Fusion',
            'cena' => '13000',
        ]);

        DB::table('products')->insert([
            'vyrobce' => 'Apple',
            'model' => 'iPhone SE 2020',
            'barva' => 'Black',
            'pamet' => '64 GB',
            'popis' => 'A13 Bionic',
            'cena' => '12147',
        ]);

        DB::table('products')->insert([
            'vyrobce' => 'Apple',
            'model' => 'Watch series 3',
            'barva' => 'Space gray',
            'pamet' => '8 GB',
            'popis' => 'sportovní černý pásek, 42 mm',
            'cena' => '6590',
        ]);
    }
}
