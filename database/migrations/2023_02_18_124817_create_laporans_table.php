<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelapor');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->foreignId('kategori');
            $table->boolean('is_kategori_lain')->default(false);
            $table->string('kategori_lain')->nullable();
            $table->string('deskripsi');
            $table->string('dokumentasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
};
