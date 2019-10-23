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

    public function showSensor($sensor_type, $sensor_id, Request $request) {
        if ($request->filtroTempo) {
            $qtde = $request->filtroTempo;
        }
        else {
            $qtde = 12;
        }
        switch ($sensor_type) {
            case 'Temperatura':
                $leituras = Temperature::find($sensor_id)
                    ->latest('id')
                    ->take($qtde)
                    ->get();
                $sensor = $leituras[0]->sensor;
                break;

            case 'Condutividade':
                $leituras = Condutivity::find($sensor_id)
                    ->latest('id')
                    ->take($qtde)
                    ->get();
                $sensor = $leituras[0]->sensor;
                break;

            case 'Umidade':
                $leituras = Humidity::find($sensor_id)
                    ->latest('id')
                    ->take($qtde)
                    ->get();
                $sensor = $leituras[0]->sensor;
                break;
        }
        $dados = array_reverse(array_column($leituras->toArray(),'leitura'));
        $datas = array_reverse(array_column($leituras->toArray(),'created_at'));

        if ($request->filtroTempo > 2000) {
            foreach ($datas as $data) {
                $datas_formatadas[] = date('d-m-Y', strtotime($data));
            }
        }
        else {
            foreach ($datas as $data) {
                $datas_formatadas[] = date('H:i:s', strtotime($data));
            }
        }

        return view('sensordetails',
            compact('dados','datas_formatadas', 'leituras','sensor', 'qtde'));
    }
}
