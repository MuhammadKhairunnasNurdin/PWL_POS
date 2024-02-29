<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $listBuyers = ['jake', 'thane', 'john', 'viper', 'maria', 'sandy', 'sylph', 'hakan', 'doe', 'caleb'];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' => 3,
                'pembeli' => $listBuyers[$i],
                'penjualan_kode' => 'SELL' . $i + 1,
                'penjualan_tanggal' => '2024-01-10 12:00:00',
            ];
        }
        DB::table('t_penjualan')->insert($data);
    }
}
