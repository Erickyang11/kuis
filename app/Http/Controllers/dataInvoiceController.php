<?php

namespace App\Http\Controllers;

use App\Models\dataPelanggan;
use App\Models\dataPerusahaan;
use App\Models\dataProduk;
use Illuminate\Http\Request;

class dataInvoiceController extends Controller
{
    public function index(){
        // Contoh query untuk mengambil data dari tabel Produk
    $dataProduk = dataProduk::all();

    // Contoh query untuk mengambil data dari tabel Kategori
    $dataPelanggan = dataPelanggan::all();

    // Contoh query untuk mengambil data dari tabel Pengguna
    $dataPerusahaan = dataPerusahaan::all();

    return view('index')
    ->with('dataProduk', $dataProduk)
    ->with('dataPelanggan', $dataPelanggan)
    ->with('dataPerusahaan', $dataPerusahaan);
    }
}
