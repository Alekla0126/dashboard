@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="gauge">
                    <div class="gauge__body">
                        <div class="gauge__fill"></div>
                        <div class="gauge__cover"></div>
                    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function getMessage()
        {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('/check_Temp/') }}",
                type: "POST",
                data: {
                    'id': id,
                    "_token": "{{ csrf_token() }}"
                },
                success: function (data)
                {
                    let value = data;
                }
            });
            return value;
        }
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
        setGaugeValue(gaugeElement, getMessage());
    </script>
@endpush
