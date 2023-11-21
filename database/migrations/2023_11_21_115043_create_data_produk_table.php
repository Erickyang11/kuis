<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_produk', function (Blueprint $table) {
            $table->id();
            $table->char('deskripsi', 50);
            $table->decimal('qty', 8, 2);
            $table->decimal('harga_satuan', 8, 2);
            $table->text('tax');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_produk');
    }
};
