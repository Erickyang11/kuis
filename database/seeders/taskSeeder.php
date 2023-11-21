<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('data_perusahaan')->insert([
            ['nama_perusahaan'=>'PT.ROTI ANEKA RASA INDONESIA',
            'alamat'=>'Jalan MH. Thamrin No.101',
            'kota'=>'Medan Sumatera Utara',
            'negara'=>'Indonesia',
            ]
        ]
        );

        DB::table('data_pelanggan')->insert([
            ['nama_pelanggan'=>'Budi Hariadi',
            'alamat'=>'Jl. Bridgen Katamso No.35',
            'kota'=>'Medan SU',
            'negara'=>'Indonesia',
            ]
        ]
        );

        DB::table('data_produk')->insert([
            ['deskripsi'=>'Roti Tawar Kukus',
            'qty'=>'400',
            'harga_satuan'=>'20000',
            'tax'=>'ST1',
            ],
            [
                'deskripsi' => 'Roti Tawar',
                'qty' => '500',
                'harga_satuan' => '15000',
                'tax' => 'ST1',
            ],
            [
                'deskripsi' => 'Roti Tawar Pandan',
                'qty' => '50',
                'harga_satuan' => '15000',
                'tax' => 'ST1',
            ],
            [
                'deskripsi' => 'Roti Tawar Kukus Srikaya',
                'qty' => '45',
                'harga_satuan' => '20000',
                'tax' => 'ST1',
            ],
            [
                'deskripsi' => 'Roti Tawar Kukus Cokelat',
                'qty' => '55',
                'harga_satuan' => '20000',
                'tax' => 'ST1',
            ]
        ]
        );
    }
}
