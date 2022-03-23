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
                'noHPPekerja' => '081123456789001'
            ],
            //2
            [
                'namaPekerja' => 'Pekerja 2',
                'alamatPekerja' => 'Surabaya',
                'noHPPekerja' => '08112345678900 2'
            ],
            //3
            [
                'namaPekerja' => 'Pekerja 3',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789003'
            ],
            //4
            [
                'namaPekerja' => 'Pekerja 4',
                'alamatPekerja' => 'Bojonegoro',
                'noHPPekerja' => '081123456789004'
            ],
            //5
            [
                'namaPekerja' => 'Pekerja 5',
                'alamatPekerja' => 'Sidoarjo',
                'noHPPekerja' => '081123456789005'
            ],
            //6
            [
                'namaPekerja' => 'Pekerja 6',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789006'
            ],
            //7
            [
                'namaPekerja' => 'Pekerja 7',
                'alamatPekerja' => 'Surabaya',
                'noHPPekerja' => '081123456789007'
            ],
            //8
            [
                'namaPekerja' => 'Pekerja 8',
                'alamatPekerja' => 'Gresik',
                'noHPPekerja' => '081123456789008'
            ],
            //9
            [
                'namaPekerja' => 'Pekerja 9',
                'alamatPekerja' => 'Lamongan',
                'noHPPekerja' => '081123456789009'
            ],
            //10
            [
                'namaPekerja' => 'Pekerja 10',
                'alamatPekerja' => 'Malang',
                'noHPPekerja' => '081123456789010'
            ]
        ]);
    }
}
