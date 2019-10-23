<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
    protected $table = 'humidities';

    protected $fillable = [
        'sensor_id', 'leitura'
    ];

    public function sensor() {
        return $this->belongsTo('App\Sensor', 'sensor_id', 'id');
    }
}
