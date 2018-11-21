<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = [
        'name', 'genre', 'main_song'
    ];

    /**
     * ou, pode-se usar o método guarded recebendo um array vazio.
     * guarded é o contrário do fillable: dizemos ao Laravel quais as propriedades não podem ser preenchidas
     */

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
