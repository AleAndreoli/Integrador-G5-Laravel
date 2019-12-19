<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    // Modelo de la tabla addresses

    protected $fillable = [
        'user_id','provider_id','street', 'number', 'alias', 'floor', 'apartment', 'unit_tower', 'neighborhood', 'province', 'city','zip_code'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }
}
