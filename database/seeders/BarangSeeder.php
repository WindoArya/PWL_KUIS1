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
                'namaBarang' => 'Barang 1',
                'hargaBarang' => 10000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //2
            [
                'namaBarang' => 'Barang 2',
                'hargaBarang' => 20000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //3
            [
                'namaBarang' => 'Barang 3',
                'hargaBarang' => 30000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //4
            [
                'namaBarang' => 'Barang 4',
                'hargaBarang' => 40000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //5
            [
                'namaBarang' => 'Barang 5',
                'hargaBarang' => 50000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //6
            [
                'namaBarang' => 'Barang 6',
                'hargaBarang' => 5000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //7
            [
                'namaBarang' => 'Barang 7',
                'hargaBarang' => 6000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //8
            [
                'namaBarang' => 'Barang 8',
                'hargaBarang' => 15000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //9
            [
                'namaBarang' => 'Barang 9',
                'hargaBarang' => 25000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ],
            //10
            [
                'namaBarang' => 'Barang 10',
                'hargaBarang' => 60000,
                'deskripsi' => '...',
                'image' => '/assets/img/curved-images/curved14.jpg'
            ]
        ]);
    }
}
