<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendezvou extends Model
{
    protected $table = 'rendezvous';

    protected $fillable = [
        'date',
        'styliste_id',
        'user_id',
    ];
    public function styliste(){
        return $this->belongsTo(Styliste::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
