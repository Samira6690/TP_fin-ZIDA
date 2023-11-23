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
class Rendezvou extends Model
{
    protected $table = 'rendezvous';

    protected $fillable = [
        'date',
        'styliste_id',
        'user_id',
    ];
    public function styliste() {
        return $this->belongsTo(Styliste::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
