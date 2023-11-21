<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use\App\Models\Commande;
use\App\Models\Produit;
use\App\Models\Catégorie;
use\App\Models\Commentaire;
use\App\Models\Transaction;
use\App\Models\Rendezvou;
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
