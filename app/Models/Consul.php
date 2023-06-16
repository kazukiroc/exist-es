<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consul extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        $this->belongsTo(User::class, 'id_expert');
    }

    public function result()
    {
        $this->hasMany(Result::class, 'id_consul');
    }

}
