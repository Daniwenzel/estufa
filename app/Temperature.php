<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $table = 'temperatures';

    protected $fillable = [
        'sensor_id', 'leitura'
    ];

    public function sensor() {
        return $this->belongsTo('App\Sensor', 'sensor_id', 'id');
    }
}
