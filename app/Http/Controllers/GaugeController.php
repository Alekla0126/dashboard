<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class GaugeController extends Controller
    {
        public function checkTemp(Request $request)
        {
            $post = $request->all();
            echo "<script>setGaugeValue(gaugeElement, $post);</script>";
        }
    }
