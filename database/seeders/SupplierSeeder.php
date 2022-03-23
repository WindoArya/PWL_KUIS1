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
                'namaSupplier' => 'Supplier 1',
                'alamatSupplier' => 'Surabaya',
                'noHPSupplier' => '08145645645601'
            ],
            //2
            [
                'namaSupplier' => 'Supplier 2',
                'alamatSupplier' => 'Malang',
                'noHPSupplier' => '08145645645602'
            ],
            //3
            [
                'namaSupplier' => 'Supplier 3',
                'alamatSupplier' => 'Malang',
                'noHPSupplier' => '08145645645603'
            ],
            //4
            [
                'namaSupplier' => 'Supplier 4',
                'alamatSupplier' => 'Surabaya',
                'noHPSupplier' => '08145645645604'
            ],
            //5
            [
                'namaSupplier' => 'Supplier 5',
                'alamatSupplier' => 'Jakarta',
                'noHPSupplier' => '08145645645605'
            ],
            //6
            [
                'namaSupplier' => 'Supplier 6',
                'alamatSupplier' => 'Jakarta',
                'noHPSupplier' => '08145645645606'
            ],
            //7
            [
                'namaSupplier' => 'Supplier 7',
                'alamatSupplier' => 'Malang',
                'noHPSupplier' => '08145645645607'
            ],
            //8
            [
                'namaSupplier' => 'Supplier 8',
                'alamatSupplier' => 'Bandung',
                'noHPSupplier' => '08145645645608'
            ],
            //9
            [
                'namaSupplier' => 'Supplier 9',
                'alamatSupplier' => 'Malang',
                'noHPSupplier' => '08145645645609'
            ],
            //10
            [
                'namaSupplier' => 'Supplier 10',
                'alamatSupplier' => 'Bandung',
                'noHPSupplier' => '08145645645600'
            ]
        ]);
    }
}
