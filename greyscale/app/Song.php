<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $guarded = [];

    public function band()
    {
        return $this->belongsTo(Band::class);
    }
}
