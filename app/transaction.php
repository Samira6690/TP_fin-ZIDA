<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\App\Models\Commande;
use\App\Models\Styliste;
use\App\Models\Produit;
use\App\Models\Catégorie;
use\App\Models\User;
use\App\Models\Commentaire;
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
