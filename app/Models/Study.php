<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Study extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'nama',
    //     'keterangan',
    // ];
    protected $guarded = ['id'];

//    public function reccomendation()
//    {
//        $this->hasMany(oldReccomendation::class, 'id_study');
//    }
    public function intelligences(): BelongsToMany
    {
        return $this->belongsToMany(Intelligence::class, 'reccomendations', 'id_study', 'id_intelligence')
//            ->withPivot(['team_id', 'user_type'])
            ->using(Reccomendation::class);
    }

}
