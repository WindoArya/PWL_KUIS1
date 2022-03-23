<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavigationController extends Controller
{
    public function barang(){
        $barang = DB::table('barang')->paginate(5);

        return view('konten.barang')
                    ->with('title', 'Barang')
                    ->with('subtitle', 'Daftar Barang')
                    ->with('barang', $barang);
    }
    public function pelanggan(){
        $pelanggan = DB::table('pelanggan')->paginate(5);

        return view('konten.pelanggan')
                    ->with('title', 'Pelanggan')
                    ->with('subtitle', 'Daftar Pelanggan')
                    ->with('pelanggan', $pelanggan);
    }
    public function pekerja(){
        $pekerja = DB::table('pekerja')->paginate(5);

        return view('konten.pekerja')
                    ->with('title', 'Pekerja')
                    ->with('subtitle', 'Daftar Pekerja')
                    ->with('pekerja', $pekerja);
    }
    public function supplier(){
        $supplier = DB::table('supplier')->paginate(5);

        return view('konten.supplier')
                    ->with('title', 'Supplier')
                    ->with('subtitle', 'Daftar Supplier')
                    ->with('supplier', $supplier);
    }
}
