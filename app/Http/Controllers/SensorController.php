<?php

    namespace App\Http\Controllers;

    use App\Models\Sensor;
    use Illuminate\Http\Request;

    class SensorController extends Controller
    {
        public function storeTemp(Request $request)
        {
            $sensor = new Sensor;
            $sensor->temperature = $request->temperature;
            $sensor->created_at = $request->created_at;
            $sensor->updated_at = $request->updated_at;
            $sensor->save();
            if($sensor)
            {
                return ['result' => 'Se realizo con éxito'];
            }
            else
            {
                return ['result' => 'No se pueden subir los datos'];
            }
        }

    }
