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
                'namaPelanggan' => 'Pelanggan 1',
                'alamatPelanggan' => 'Malang',
                'noHPPelanggan' => '081123123123121'
            ],
            //2
            [
                'namaPelanggan' => 'Pelanggan 2',
                'alamatPelanggan' => 'Malang',
                'noHPPelanggan' => '081123123123122'
            ],
            //3
            [
                'namaPelanggan' => 'Pelanggan 3',
                'alamatPelanggan' => 'Malang',
                'noHPPelanggan' => '081123123123123'
            ],
            //4
            [
                'namaPelanggan' => 'Pelanggan 4',
                'alamatPelanggan' => 'Malang',
                'noHPPelanggan' => '081123123123124'
            ],
            //5
            [
                'namaPelanggan' => 'Pelanggan 5',
                'alamatPelanggan' => 'Surabaya',
                'noHPPelanggan' => '081123123123125'
            ],
            //6
            [
                'namaPelanggan' => 'Pelanggan 6',
                'alamatPelanggan' => 'Surabaya',
                'noHPPelanggan' => '081123123123126'
            ],
            //7
            [
                'namaPelanggan' => 'Pelanggan 7',
                'alamatPelanggan' => 'Surabaya',
                'noHPPelanggan' => '081123123123127'
            ],
            //8
            [
                'namaPelanggan' => 'Pelanggan 8',
                'alamatPelanggan' => 'Sidoarjo',
                'noHPPelanggan' => '081123123123128'
            ],
            //9
            [
                'namaPelanggan' => 'Pelanggan 9',
                'alamatPelanggan' => 'Madiun',
                'noHPPelanggan' => '081123123123129'
            ],
            //10
            [
                'namaPelanggan' => 'Pelanggan 10',
                'alamatPelanggan' => 'Lamongan',
                'noHPPelanggan' => '081123123123120'
            ]
        ]);
    }
}
