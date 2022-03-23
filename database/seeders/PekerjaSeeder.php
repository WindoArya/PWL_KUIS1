<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerja')->insert([
            //1
            [
                'namaPekerja' => 'Pekerja 1',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789001',
                'image' => '/assets/img/profile.png'
            ],
            //2
            [
                'namaPekerja' => 'Pekerja 2',
                'alamatPekerja' => 'Surabaya',
                'noHPPekerja' => '081123456789002',
                'image' => '/assets/img/profile.png'
            ],
            //3
            [
                'namaPekerja' => 'Pekerja 3',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789003',
                'image' => '/assets/img/profile.png'
            ],
            //4
            [
                'namaPekerja' => 'Pekerja 4',
                'alamatPekerja' => 'Bojonegoro',
                'noHPPekerja' => '081123456789004',
                'image' => '/assets/img/profile.png'
            ],
            //5
            [
                'namaPekerja' => 'Pekerja 5',
                'alamatPekerja' => 'Sidoarjo',
                'noHPPekerja' => '081123456789005',
                'image' => '/assets/img/profile.png'
            ],
            //6
            [
                'namaPekerja' => 'Pekerja 6',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789006',
                'image' => '/assets/img/profile.png'
            ],
            //7
            [
                'namaPekerja' => 'Pekerja 7',
                'alamatPekerja' => 'Surabaya',
                'noHPPekerja' => '081123456789007',
                'image' => '/assets/img/profile.png'
            ],
            //8
            [
                'namaPekerja' => 'Pekerja 8',
                'alamatPekerja' => 'Gresik',
                'noHPPekerja' => '081123456789008',
                'image' => '/assets/img/profile.png'
            ],
            //9
            [
                'namaPekerja' => 'Pekerja 9',
                'alamatPekerja' => 'Lamongan',
                'noHPPekerja' => '081123456789009',
                'image' => '/assets/img/profile.png'
            ],
            //10
            [
                'namaPekerja' => 'Pekerja 10',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789010',
                'image' => '/assets/img/profile.png'
            ]
        ]);
    }
}
