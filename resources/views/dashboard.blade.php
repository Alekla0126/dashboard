@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <template>
                        <vue-gauge :refid="'type-unique-id'"
                                   :options="{'needleValue':85,'arcDelimiters':[10,36,78], 'hasNeedle':false]}">
                        </vue-gauge>
                    </template>
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
    <script>
        import VueGauge from 'vue-gauge';

        export default {
            components: {VueGauge},
        }
    </script>
@endpush
