<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserConsul extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'user_consuls';

    public function consul(): BelongsTo
    {
        return $this->belongsTo(Consul::class, 'id_consul');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
