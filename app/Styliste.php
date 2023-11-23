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
class Styliste extends Model
{
    protected $table = 'stylistes';

    protected $fillable = [
        'nom_entreprise',
        'contact',
        'localisation',
        'photo',

    ];
    public function produits() {
        return $this->hasMany(Produit::class);
    }

    public function rendezvous() {
        return $this->hasMany(RendezVous::class);
    }

}
