<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Knowledge extends Pivot
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'knowledge';
//    public $timestamps = false;

//    public function intelligence()
//    {
//        $this->belongsTo(Intelligence::class, 'id_intelligence');
//    }
//    public function character()
//    {
//        $this->belongsTo(Characteristic::class, 'id_character');
//    }
    public function result()
    {
        $this->hasMany(Result::class, 'id_knowledge');
    }
}
