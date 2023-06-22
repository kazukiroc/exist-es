<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Reccomendation extends Pivot
{
    protected $table = 'reccomendations';
    protected $guarded = ['id'];
    public $timestamps = false;
}
