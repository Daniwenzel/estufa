<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $table = 'sensors';

    protected $fillable = [
        'name', 'greenhouse_id'
    ];

    public function greenhouse() {
        return $this->belongsTo('App\Greenhouse', 'greenhouse_id', 'id');
    }
}
