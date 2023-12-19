<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluars';
    protected $fillable = [
        'no_surat',
        'no_agenda',
        'jenis_surat',
        'tanggal_kirim',
        'pengirim',
        'perihal',
        'surat_keluar'
    ];

    public function disposisi()
    {
        return $this->belongsTo(Disposisi::class, 'no_surat', 'no_surat');
    }
}
