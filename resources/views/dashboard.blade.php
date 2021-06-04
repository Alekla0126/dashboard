@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="gauge">
        <div class="gauge__body">
            <div class="gauge__fill"></div>
            <div class="gauge__cover"></div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function ()
        {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
    <script>
        const gaugeElement = document.querySelector(".gauge");
        function setGaugeValue(gauge, value)
        {
            if (value < 0 || value > 1)
            {
                return;
            }
            gauge.querySelector(".gauge__fill").style.transform = `rotate(${
                value / 2
            }turn)`;
            gauge.querySelector(".gauge__cover").textContent = `${Math.round(
                value * 100
            )}%`;
        }
        setGaugeValue(gaugeElement, 0.3);
    </script>
@endpush
