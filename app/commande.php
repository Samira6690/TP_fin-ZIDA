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


    public function utilisateur() {
        return $this->belongsTo(Utilisateur::class);
    }

    public function produits() {
        return $this->belongsToMany(Produit::class, 'produit_commande');
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
