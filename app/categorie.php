<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    protected $table = 'categorie';

    protected $fillable = [
        'nom',
    ];
}
