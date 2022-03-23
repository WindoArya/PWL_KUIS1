<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BarangSeeder::class);
        $this->call(PekerjaSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(SupplierSeeder::class);
    }
}
