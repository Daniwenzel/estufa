<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Greenhouse extends Model
{
    protected $table = 'greenhouses';

    protected $fillable = [
        'name', 'user_id'
    ];

    public function sensors() {
        return $this->hasMany('App\Sensor', 'greenhouse_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
