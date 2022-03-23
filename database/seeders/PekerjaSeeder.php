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
                'nama_pekerja' => 'Pekerja 1',
                'alamat_pekerja' => 'Malang',
                'no_hp_pekerja' => '081123456789001',
                'image' => '/assets/img/profile.png'
            ],
            //2
            [
                'nama_pekerja' => 'Pekerja 2',
                'alamat_pekerja' => 'Surabaya',
                'no_hp_pekerja' => '081123456789002',
                'image' => '/assets/img/profile.png'
            ],
            //3
            [
                'nama_pekerja' => 'Pekerja 3',
                'alamat_pekerja' => 'Malang',
                'no_hp_pekerja' => '081123456789003',
                'image' => '/assets/img/profile.png'
            ],
            //4
            [
                'nama_pekerja' => 'Pekerja 4',
                'alamat_pekerja' => 'Bojonegoro',
                'no_hp_pekerja' => '081123456789004',
                'image' => '/assets/img/profile.png'
            ],
            //5
            [
                'nama_pekerja' => 'Pekerja 5',
                'alamat_pekerja' => 'Sidoarjo',
                'no_hp_pekerja' => '081123456789005',
                'image' => '/assets/img/profile.png'
            ],
            //6
            [
                'nama_pekerja' => 'Pekerja 6',
                'alamat_pekerja' => 'Malang',
                'no_hp_ekerja' => '081123456789006',
                'image' => '/assets/img/profile.png'
            ],
            //7
            [
                'nama_pekerja' => 'Pekerja 7',
                'alamat_pekerja' => 'Surabaya',
                'no_hp_pekerja' => '081123456789007',
                'image' => '/assets/img/profile.png'
            ],
            //8
            [
                'nama_pekerja' => 'Pekerja 8',
                'alamat_pekerja' => 'Gresik',
                'no_hp_pekerja' => '081123456789008',
                'image' => '/assets/img/profile.png'
            ],
            //9
            [
                'nama_pekerja' => 'Pekerja 9',
                'alamat_pekerja' => 'Lamongan',
                'no_hp_pekerja' => '081123456789009',
                'image' => '/assets/img/profile.png'
            ],
            //10
            [
                'nama_pekerja' => 'Pekerja 10',
                'alamat_pekerja' => 'Malang',
                'no_hp_ekerja' => '081123456789010',
                'image' => '/assets/img/profile.png'
            ]
        ]);
    }
}
