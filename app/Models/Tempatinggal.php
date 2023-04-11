<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempatinggal extends Model
{
    use HasFactory;
    protected $fillable = [
    'kelurahan', 'kecamatan', 'kota_kabupaten', 'provinsi', 'kd_pos', 'negara'
    ];
}
