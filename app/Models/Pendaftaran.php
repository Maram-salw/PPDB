<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap', 'jk', 'ttl', 'agama', 'cita_cita', 'hobi', 'anak_ke', 'jumlah_saudara', 'tinggi_badan', 'berat_badan', 'golongan_darah'
        ];
}
