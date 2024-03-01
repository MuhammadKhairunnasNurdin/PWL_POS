<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(): string
    {
        /**
         * Syntax for insert using Query Builder Facade
         */
        /*$data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now(),
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';*/

        /**
         * Syntax for update using Query Builder Facade
         */
       /* $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        return 'Update data berhasil. Jumlah data yang di update: ' . $row . ' baris';*/

        /**
         * Syntax for update using Query Builder Facade
         */
        /*$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang di delete: ' . $row . ' baris';*/

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
