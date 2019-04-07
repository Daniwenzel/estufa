<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condutivity extends Model
{
    protected $table = 'condutivities';

    protected $fillable = [
        'sensor_id', 'leitura'
    ];

    public function sensor() {
        $this->belongsTo('App\Sensor', 'sensor_id', 'id');
    }
}
