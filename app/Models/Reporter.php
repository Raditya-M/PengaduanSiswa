<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{
    protected $table = 'reporters';

    protected $fillable = [
        'nama',
        'tanggal',
        'lokasi',
        'kategori',
        'gambar',
        'status',
    ];
}
