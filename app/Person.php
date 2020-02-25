<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
