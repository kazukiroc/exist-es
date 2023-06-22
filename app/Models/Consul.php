<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Characteristic::class, 'consul_map', 'id_consul', 'id_character')
//            ->withPivot(['team_id', 'user_type'])
            ->using(ConsulMap::class);
    }

    public function characterResults(): BelongsToMany
    {
        return $this->belongsToMany(Characteristic::class, 'results', 'id_consul', 'id_character')
            ->withPivot(['id_user', 'skor'])
            ->using(Result::class);
    }
    public function userConsuls(): HasMany
    {
        return $this->hasMany(UserConsul::class, 'id_consul');
    }
}
