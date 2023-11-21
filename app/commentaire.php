<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;
use App\Models\User;
class commentaire extends Model
{
    protected $table = 'rendezvous';

    protected $fillable = [
        'contenu',
        'produit_id',
        'user_id',
    ];
    public function produit(){
        return $this->belongsTo(Produit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
