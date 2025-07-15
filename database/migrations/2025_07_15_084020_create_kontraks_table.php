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
        Schema::create('kontraks', function (Blueprint $table) {
            $table->id();
            $table->string('no_kontrak');
            $table->date('tanggal');
            $table->date('batas_akhir')->nullable();
            $table->text('uraian')->nullable();
            $table->decimal('nilai_harga_total', 18, 2)->default(0);
            $table->json('file_kontrak')->nullable(); // Menyimpan array path file PDF
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontraks');
    }
};
