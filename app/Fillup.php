<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fillup extends Model
{
    protected $fillable = [
        'car_id', 'odometer', 'gallons', 'price'
    ];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }
}
