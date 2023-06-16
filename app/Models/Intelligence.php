<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intelligence extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'kode',
    //     'jenis',
    //     'prodi',
    // ];
    protected $guarded = ['id'];

    public function knowledges()
    {
        $this->hasMany(Knowledge::class, 'id_intelligence');
    }
    public function reccomendation()
    {
        $this->hasMany(Reccomendation::class, 'id_intelligence');
    }

}
