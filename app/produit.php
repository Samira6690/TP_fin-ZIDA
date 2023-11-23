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
class produit extends Model
{
    protected $table = 'produits';
    protected $fillable = [
        'nom',
        'montant',
        'styliste_id',
    ];
    public function styliste(){
        return $this->belongsTo(Styliste::class);
    }

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function commandes() {
        return $this->belongsToMany(Commande::class, 'produit_commande');
    }
}
