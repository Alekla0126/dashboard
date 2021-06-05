<?php

    use App\Models\Sensor;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::middleware('auth:api')->get('/user', function (Request $request)
    {
        return $request->user();
    });

    Route::put('update', function (Request $request)
    {
        $sensor = Sensor::findOrFail($request->id);
        $sensor->temperature = $request->temperature;
        $result = $sensor->save();
        if ($result)
        {
            return ['result' => 'Se actualizo la temperatura'];
        }
        else
        {
            return ['result' => 'Fallo la actualización de la temperatura'];
        }
    });
