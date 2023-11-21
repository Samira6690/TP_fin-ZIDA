<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'montant',
        'date_transaction',
        'commande_id',
    ];
    public function commandes(){
    return $this->belongoTo(Commande::class);
}
}
