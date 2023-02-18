<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelapor',
        'tanggal',
        'lokasi',
        'kategori',
        'is_kategori_lain',
        'kategori_lain',
        'deskripsi',
        'dokumentasi',
        'pic_checked',
        'pic_checked_at',
        'pic',
        'completed',
        'completed_at',
        'completed_by',
    ];

    // Relation with Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
