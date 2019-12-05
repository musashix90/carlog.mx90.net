<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'name', 'make', 'model', 'year', 'photo_filename'
    ];

    public function fillups()
    {
        return $this->hasMany('App\Fillup');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
