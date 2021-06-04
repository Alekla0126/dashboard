@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div id="gaugeArea"></div>
                </div>
            </div>
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
    <script src="https://unpkg.com/gauge-chart@latest/dist/bundle.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/gauge.js') }}"></script>
@endpush
