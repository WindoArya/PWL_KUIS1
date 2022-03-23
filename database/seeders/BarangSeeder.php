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
            //1
            [
                'nama_barang' => 'Barang 1',
                'harga_barang' => 10000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //2
            [
                'nama_barang' => 'Barang 2',
                'harga_barang' => 20000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //3
            [
                'nama_barang' => 'Barang 3',
                'harga_barang' => 30000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //4
            [
                'nama_barang' => 'Barang 4',
                'harga_barang' => 40000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //5
            [
                'nama_barang' => 'Barang 5',
                'harga_barang' => 50000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //6
            [
                'nama_barang' => 'Barang 6',
                'harga_barang' => 5000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //7
            [
                'nama_barang' => 'Barang 7',
                'harga_barang' => 6000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //8
            [
                'nama_barang' => 'Barang 8',
                'harga_barang' => 15000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //9
            [
                'nama_barang' => 'Barang 9',
                'harga_barang' => 25000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //10
            [
                'nama_barang' => 'Barang 10',
                'harga_barang' => 60000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ]
        ]);
    }
}
