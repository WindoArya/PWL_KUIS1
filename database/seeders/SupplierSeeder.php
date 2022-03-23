<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            //1
            [
                'nama_supplier' => 'Supplier 1',
                'alamat_supplier' => 'Surabaya',
                'no_hp_supplier' => '08145645645601'
            ],
            //2
            [
                'nama_supplier' => 'Supplier 2',
                'alamat_supplier' => 'Malang',
                'no_hp_supplier' => '08145645645602'
            ],
            //3
            [
                'nama_supplier' => 'Supplier 3',
                'alamat_supplier' => 'Malang',
                'no_hp_supplier' => '08145645645603'
            ],
            //4
            [
                'nama_supplier' => 'Supplier 4',
                'alamat_supplier' => 'Surabaya',
                'no_hp_supplier' => '08145645645604'
            ],
            //5
            [
                'nama_supplier' => 'Supplier 5',
                'alamat_supplier' => 'Jakarta',
                'no_hp_supplier' => '08145645645605'
            ],
            //6
            [
                'nama_supplier' => 'Supplier 6',
                'alamat_supplier' => 'Jakarta',
                'no_hp_supplier' => '08145645645606'
            ],
            //7
            [
                'nama_supplier' => 'Supplier 7',
                'alamat_supplier' => 'Malang',
                'no_hp_supplier' => '08145645645607'
            ],
            //8
            [
                'nama_supplier' => 'Supplier 8',
                'alamat_supplier' => 'Bandung',
                'no_hp_supplier' => '08145645645608'
            ],
            //9
            [
                'nama_supplier' => 'Supplier 9',
                'alamat_supplier' => 'Malang',
                'no_hp_supplier' => '08145645645609'
            ],
            //10
            [
                'nama_supplier' => 'Supplier 10',
                'alamat_supplier' => 'Bandung',
                'no_hp_supplier' => '08145645645600'
            ]
        ]);
    }
}
