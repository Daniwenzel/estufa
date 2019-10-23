<?php

namespace App\Http\Controllers;

use App\Greenhouse;
use Illuminate\Support\Facades\Auth;

class GreenhouseController extends Controller
{
    public function showGreenhouseList() {
        $user = Auth::user();
        $greenhouses = $user->greenhouse;

        return view('greenhouselist', compact(['greenhouses']));
    }

    public function showGreenhouseDetails($greenhouse_id) {
        $greenhouse = Greenhouse::find($greenhouse_id);
        $sensors = $greenhouse->sensors;

        return view('greenhousedetails', compact('sensors'));
    }
}
