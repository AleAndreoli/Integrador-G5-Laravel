<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    // Modelo de la tabla telephones

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }
}
