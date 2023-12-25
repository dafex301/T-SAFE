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
            $table->foreignId('cabang');
            $table->date('tanggal');
            $table->string('lokasi');

            $table->foreignId('aset')->nullable();

            $table->foreignId('kategori');
            $table->string('kategori_lain')->nullable();
            $table->string('deskripsi');

            $table->string('immediate_action')->nullable();
            $table->string('prevention')->nullable();

            $table->boolean('pic_checked')->default(false);
            $table->timestamp('pic_checked_at')->nullable();
            $table->foreignId('pic')->nullable();
            $table->boolean('pic_rejected')->default(false);
            $table->string('pic_rejected_reason')->nullable();

            $table->foreignId('branch_manager')->nullable();
            $table->boolean('branch_manager_checked')->default(false);
            $table->timestamp('branch_manager_checked_at')->nullable();
            $table->boolean('branch_manager_rejected')->default(false);
            $table->string('branch_manager_rejected_reason')->nullable();

            $table->boolean('dpnp_checked')->default(false);
            $table->timestamp('dpnp_checked_at')->nullable();
            $table->boolean('dpnp_rejected')->default(false);
            $table->string('dpnp_rejected_reason')->nullable();
            $table->foreignId('dpnp')->nullable();

            $table->boolean('completed')->default(false);
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
