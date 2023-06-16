<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reccomendation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function study()
    {
        $this->belongsTo(Study::class, 'id_study');
    }
    public function intteligence()
    {
        $this->belongsTo(Intelligence::class, 'id_intelligence');
    }

}
