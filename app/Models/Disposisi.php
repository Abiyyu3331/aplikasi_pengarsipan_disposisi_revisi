<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;

    protected $table = 'disposisis';
    protected $primaryKey = 'no_disposisi';
    protected $fillable = [
        'no_disposisi',
        'no_surat',
        'no_agenda',
        'kepada',
        'keterangan',
        'status_surat',
        'tanggapan'
    ];

    public function suratmasuk()
    {
        return $this->belongsTo(Suratmasuk::class, 'no_surat', 'no_surat');
    }

    public function suratkeluar()
    {
        return $this->hasOne(Suratkeluar::class, 'no_surat', 'no_surat');
    }
}
