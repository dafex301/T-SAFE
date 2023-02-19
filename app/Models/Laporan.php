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
        'tanggal',
        'lokasi',
        'kategori',
        'is_kategori_lain',
        'kategori_lain',
        'deskripsi',
        'image',
        'pic_checked',
        'pic_checked_at',
        'pic',
        'branch_manager',
        'branch_manager_approval',
        'branch_manager_approval_at',
        'immediate_action',
        'prevention',
        'completed',
        'completed_image',
        'completed_at',
        'completed_by',
    ];

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

    // Completed by
    public function completed_by()
    {
        return $this->belongsTo(User::class, 'completed_by');
    }
}
