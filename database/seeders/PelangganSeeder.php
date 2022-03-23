<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            //1
            [
                'nama_pelanggan' => 'Pelanggan 1',
                'alamat_pelanggan' => 'Malang',
                'no_hp_pelanggan' => '081123123123121'
            ],
            //2
            [
                'nama_pelanggan' => 'Pelanggan 2',
                'alamat_pelanggan' => 'Malang',
                'no_hp_pelanggan' => '081123123123122'
            ],
            //3
            [
                'nama_pelanggan' => 'Pelanggan 3',
                'alamat_pelanggan' => 'Malang',
                'no_hp_pelanggan' => '081123123123123'
            ],
            //4
            [
                'nama_pelanggan' => 'Pelanggan 4',
                'alamat_pelanggan' => 'Malang',
                'no_hp_elanggan' => '081123123123124'
            ],
            //5
            [
                'nama_pelanggan' => 'Pelanggan 5',
                'alamat_pelanggan' => 'Surabaya',
                'no_hp_pelanggan' => '081123123123125'
            ],
            //6
            [
                'nama_pelanggan' => 'Pelanggan 6',
                'alamat_pelanggan' => 'Surabaya',
                'no_hp_pelanggan' => '081123123123126'
            ],
            //7
            [
                'nama_pelanggan' => 'Pelanggan 7',
                'alamat_pelanggan' => 'Surabaya',
                'no_hp_pelanggan' => '081123123123127'
            ],
            //8
            [
                'nama_pelanggan' => 'Pelanggan 8',
                'alamat_pelanggan' => 'Sidoarjo',
                'no_hp_pelanggan' => '081123123123128'
            ],
            //9
            [
                'nama_pelanggan' => 'Pelanggan 9',
                'alamat_pelanggan' => 'Madiun',
                'no_hp_pelanggan' => '081123123123129'
            ],
            //10
            [
                'nama_pelanggan' => 'Pelanggan 10',
                'alamat_pelanggan' => 'Lamongan',
                'no_hp_pelanggan' => '081123123123120'
            ]
        ]);
    }
}
