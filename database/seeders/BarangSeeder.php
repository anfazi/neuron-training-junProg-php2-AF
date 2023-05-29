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
            [
                'nama_barang' => 'Powerbank Samsung',
                'harga' => '200000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Powerbank Sony',
                'harga' => '250000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Charger Android',
                'harga' => '50000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Charger Android Type C to C',
                'harga' => '75000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Charger Iphone',
                'harga' => '50000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Kabel USB Type A',
                'harga' => '50000',
                'ketersediaan' => 'Tidak',
            ],
            [
                'nama_barang' => 'Kabel USB Type C',
                'harga' => '75000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Kabel Iphone',
                'harga' => '100000',
                'ketersediaan' => 'Tidak',
            ],
            [
                'nama_barang' => 'Charger Docking Mobil',
                'harga' => '125000',
                'ketersediaan' => 'Tidak',
            ],
            [
                'nama_barang' => 'Charger Docking Motor',
                'harga' => '100000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Case Android',
                'harga' => '50000',
                'ketersediaan' => 'Ya',
            ],
            [
                'nama_barang' => 'Case Iphone',
                'harga' => '100000',
                'ketersediaan' => 'Ya',
            ],
        ]);
    }
}
