<?php

namespace App\Http\Controllers;

use App\Condutivity;
use App\Humidity;
use App\Temperature;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function postSensorData(Request $request) {
        $dados = [
            'leitura' => $request->read,
            'sensor_topic' => $request->topic
        ];

        switch ($request->topic) {
            case 'sensor/temperatura':
                $leitura = new Temperature($dados);
                $leitura->save();
                break;
            case 'sensor/umidade':
                $leitura = new Humidity($dados);
                $leitura->save();
                break;
            case 'sensor/condutividade':
                $leitura = new Condutivity($dados);
                $leitura->save();
                break;
        }
    }
}
