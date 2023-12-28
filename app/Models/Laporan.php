<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelapor',
        'cabang',
        'tanggal',
        'lokasi',
        'aset',
        'aset_lain',
        'kategori',
        'kategori_lain',
        'deskripsi',
        'image',
        'pic_checked',
        'pic_checked_at',
        'pic',
        'branch_manager',
        'branch_manager_checked',
        'branch_manager_checked_at',
        'immediate_action',
        'prevention',
        'completed',
        'completed_image',
        'dpnp_checked_at',
        'dpnp',
        'created_at',
    ];

    // Relation with Aset
    public function Aset()
    {
        return $this->belongsTo(Aset::class, 'aset', 'nomor');
    }

    // Relation with Kategori
    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori');
    }

    // Relation with User
    // Pelapor
    public function Pelapor()
    {
        return $this->belongsTo(User::class, 'pelapor');
    }

    // PIC
    public function PIC()
    {
        return $this->belongsTo(User::class, 'pic');
    }

    // Branch Manager
    public function BM()
    {
        return $this->belongsTo(User::class, 'branch_manager');
    }

    // DPnP
    public function DPNP()
    {
        return $this->belongsTo(User::class, 'dpnp');
    }

    public function Completed_By()
    {
        return $this->belongsTo(User::class, 'completed_by');
    }

    // Cabang
    public function Cabang()
    {
        return $this->belongsTo(Cabang::class, 'cabang');
    }

    // DokumentasiLaporan
    public function DokumentasiLaporan()
    {
        return $this->hasMany(DokumentasiLaporan::class);
    }

    // DokumentasiSelesai
    public function DokumentasiSelesai()
    {
        return $this->hasMany(DokumentasiSelesai::class);
    }
}
