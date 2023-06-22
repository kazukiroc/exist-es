<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Characteristic extends Model
{
    use HasFactory;

     protected $fillable = [
         'kode',
         'ciri',
     ];
//    protected $guarded = ['id'];

    public function knowledges()
    {
        $this->hasMany(Knowledge::class, 'id_character');
    }
    public static function generateKode(){
        $lastKode = Characteristic::select('kode')->orderBy('id','desc')->first()->kode;
        $nextId = (int)substr($lastKode, 2) + 1;
//        $lastCompanyId=(int)substr($lastCompanyId , -3);
       $generatedKode = 'C-'.$nextId;
       return $generatedKode;
    }

    public function intelligences(): BelongsToMany
    {
        return $this->belongsToMany(Intelligence::class, 'knowledge', 'id_character', 'id_intelligence')
//            ->withPivot(['team_id', 'user_type'])
            ->using(Knowledge::class);
    }
    public function consuls(): BelongsToMany
    {
        return $this->belongsToMany(Consul::class, 'consul_map', 'id_character', 'id_consul')
//            ->withPivot(['team_id', 'user_type'])
            ->using(ConsulMap::class);
    }
    public function consulResults(): BelongsToMany
    {
        return $this->belongsToMany(Consul::class, 'results', 'id_character', 'id_consul')
            ->withPivot(['id_user', 'skor'])
            ->using(Result::class);
    }

}
