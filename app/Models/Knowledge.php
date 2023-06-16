<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'knowledge';

    public function intelligence()
    {
        $this->belongsTo(Intelligence::class, 'id_intelligence');
    }
    public function character()
    {
        $this->belongsTo(Characteristic::class, 'id_character');
    }
    public function result()
    {
        $this->hasMany(Result::class, 'id_knowledge');
    }
}
