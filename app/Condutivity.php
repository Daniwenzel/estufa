<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condutivity extends Model
{
    protected $table = 'condutivities';

    protected $fillable = [
        'sensor_topic', 'leitura'
    ];

    public function sensor() {
        $this->belongsTo('App\Sensor', 'sensor_topic', 'topic');
    }
}
