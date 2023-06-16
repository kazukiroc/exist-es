<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function consul()
    {
        $this->belongsTo(Consul::class, 'id_consul');
    }

    public function user()
    {
        $this->belongsTo(User::class, 'id_user');
    }
    public function knowledge()
    {
        $this->belongsTo(Knowledge::class, 'id_knowledge');
    }

}
