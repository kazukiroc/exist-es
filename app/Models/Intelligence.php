<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intelligence extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'jenis',
        'prodi',
    ];
}
