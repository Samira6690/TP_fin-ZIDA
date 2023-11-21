<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
