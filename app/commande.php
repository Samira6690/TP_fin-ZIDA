<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Styliste;
use App\Models\User;
use\App\Models\Transaction;
class commande extends Model
{
    protected $table = 'commandes';

    protected $fillable = [
        'date_commande',
        'montant',
        'commande_id',
        'styliste_id',
        'user_id',
    ];
}
