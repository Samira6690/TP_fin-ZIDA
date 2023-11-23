<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Commande;
use App\Produit;
use App\Catégorie;
use App\Commentaire;
use App\Transaction;
use App\Rendezvou;

class categorie extends Model
{
    protected $table = 'categorie';

    protected $fillable = [
        'nom',
    ];
    public function produits() {
        return $this->hasMany(Produit::class);
    } 
}
