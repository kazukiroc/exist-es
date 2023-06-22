<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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
//    public function reccomendation()
//    {
//        $this->hasMany(oldReccomendation::class, 'id_intelligence');
//    }

    public function studies(): BelongsToMany
    {
        return $this->belongsToMany(Study::class, 'reccomendations', 'id_intelligence', 'id_study')
//            ->withPivot(['team_id', 'user_type'])
            ->using(Reccomendation::class);
    }
    public static function generateKode(){
        $lastKode = Intelligence::select('kode')->orderBy('id','desc')->first()->kode;
        $nextId = (int)substr($lastKode, 1) + 1;
//        $lastCompanyId=(int)substr($lastCompanyId , -3);
        $generatedKode = 'I'.$nextId;
        return $generatedKode;
    }

}
