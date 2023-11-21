<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Styliste extends Model
{
    protected $table = 'styliste';

    protected $fillable = [
        'nom_entreprise',
        'contact',
        'localisation',
        'photo',

    ];

}
