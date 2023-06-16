<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'kode',
    //     'ciri',
    // ];
    protected $guarded = ['id'];

    public function knowledges()
    {
        $this->hasMany(Knowledge::class, 'id_character');
    }

}
