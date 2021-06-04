@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div id="gaugeArea"></div>
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
        // Element inside which you want to see the chart
        let element = document.querySelector('#gaugeArea')
        // Properties of the gauge
        let gaugeOptions = {
            hasNeedle: true,
            needleColor: 'gray',
            needleUpdateSpeed: 1000,
            arcColors: ['rgb(44, 151, 222)', 'lightgray'],
            arcDelimiters: [30],
            rangeLabel: ['0', '100'],
            centralLabel: '50',
        }
        // Drawing and updating the chart
        GaugeChart.gaugeChart(element, 300, gaugeOptions).updateNeedle(50)
    </script>
    <script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
@endpush
