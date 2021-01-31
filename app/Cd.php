<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    protected $fillable = [
        'titolo',
        'artista',
        'genere',
        'anno',
        'prezzo',
        'slug',
        'cover'
    ];
}
