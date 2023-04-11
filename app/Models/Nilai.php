<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'ipa', 'ips', 'mtk', 'b_inggris', 'b_indonesia', 'prestasi'
    ];
}
