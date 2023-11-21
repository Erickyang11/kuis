<?php

use App\Http\Controllers\dataInvoiceController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [dataInvoiceController::class, 'index']);

// Route::get('/dataExportir', [dataexportirController::class, 'index']);
// Route::get('/dataSupplier', [datasupplierController::class, 'index']);
// Route::get('/dataLokasi', [datapksController::class, 'index']);
