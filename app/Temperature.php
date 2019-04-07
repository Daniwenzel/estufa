<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $table = 'temperatures';

    protected $fillable = [
        'sensor_topic', 'leitura'
    ];

    public function sensor() {
        $this->belongsTo('App\Sensor', 'sensor_topic', 'topic');
    }
}
