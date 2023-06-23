<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ConsulMap extends Pivot
{
//    this is pivot table from consuls and characters
    protected $guarded = ['id'];
    protected $table = 'consul_map';
//    public $timestamps = false;

}
