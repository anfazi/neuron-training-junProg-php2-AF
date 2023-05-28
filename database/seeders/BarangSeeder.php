<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            'nama_barang' => 'Powerbank',
            'harga' => '200000',
            'ketersediaan' => 'Ya',

        ]);
    }
}
