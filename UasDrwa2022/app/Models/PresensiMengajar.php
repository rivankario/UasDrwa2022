<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresensiMengajar extends Model
{
    use HasFactory;

    protected $table = 'presensi_mengajar';
        protected $fillable = [
        'id_jadwal_guru', 'tanggal', 'jam_mulai', 'jam_selesai', 'metode','keterangan'
    ];
}
