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
            $table->string('image');
            $table->boolean('pic_checked')->default(false);
            $table->timestamp('pic_checked_at')->nullable();
            $table->foreignId('pic')->nullable();
            $table->boolean('completed')->default(false);
            $table->string('immediate_action')->nullable();
            $table->string('prevention')->nullable();
            $table->string('completed_image')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->foreignId('completed_by')->nullable();
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
