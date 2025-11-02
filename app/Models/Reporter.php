<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reporter extends Model
{
    use HasFactory;

    protected $table = 'reporters';

    protected $fillable = [
        'user_id',
        'nama',
        'kategori',
        'lokasi',
        'waktu',
        'gambar',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
