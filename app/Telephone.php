<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    // Modelo de la tabla telephones

    protected $fillable = [
        'alias', 'area_code', 'number', 'type'
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
