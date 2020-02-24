<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = [
        'profile_pic', 'address', 'bio',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
