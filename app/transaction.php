<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Commande;
use App\Produit;
use App\Catégorie;
use App\Commentaire;
use App\Transaction;
use App\Rendezvou;
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
