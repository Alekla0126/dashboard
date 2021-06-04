<?php

    namespace App\Http\Controllers;

    use App\Models\Sensor;
    use Illuminate\Http\Request;

    class SensorController extends Controller
    {
        public function storeTemp(Request $request)
        {
            return Sensor::create($request->all);
        }

    }
