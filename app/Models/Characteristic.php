<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
