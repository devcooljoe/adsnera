@extends('layouts.dashboard-app')

@section('title')
    <title>Dashboard - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@endsection

@section('content')
    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <h2 class="w3_inner_tittle two">Advertiser Dashboard</h2>
            <h4>View Campaigns, Add Campaigns, View Billings</h4>
            <br>
            <!-- //agile_top_w3_post_sections-->
            <!-- /w3ls_agile_circle_progress-->
            {{-- <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Recent Campaigns Impressions</h3>

                <div id="chartdiv"></div>


            </div> --}}
            <!-- /w3ls_agile_circle_progress-->
            <!-- /chart_agile-->
            <br><br>

            <!--/prograc-blocks_agileits-->
            <div class="prograc-blocks_agileits">

                <div class="col-md-6 bars_agileits agile_info_shadow">
                    <a href="{{ route('index') }}/advertiser/campaigns/new" class="pull-right badge badge-success"
                        style="font-size: 12px;padding:10px;"><i class="fa fa-plus"></i> Create New
                        Campaign</a>
                    <h3 class="w3_inner_tittle two">Campaigns</h3>
                    <div class="work-progres">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>ID</th>

                                        <th>Views</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 1; ?>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $num }}</td>
                                            <td>{{ $task->name }}</td>
                                            <td>{{ $task->id }}</td>
                                            <td><span class="badge badge-info">{{ $task->view()->count() }}</span></td>
                                            <td>
                                                @if ($task->status == 'active')
                                                    <span class="label label-success">{{ ucwords($task->status) }}</span>
                                                @elseif($task->status == 'disabled')
                                                    <span class="label label-danger">{{ ucwords($task->status) }}</span>
                                                @else
                                                    <span class="label label-warning">{{ ucwords($task->status) }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <?php $num++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($page_num >= 1)
                                <ul class="pagination">
                                    @if ($page - 1 >= 0)
                                        <li><a href="/advertiser/dashboard?page={{ $page - 1 }}">&laquo Prev</a></li>
                                    @endif
                                    @for ($i = 0; $i <= $page_num; $i++)
                                        <li><a href="/advertiser/dashboard?page={{ $i }}"
                                                @if ($i == $page) style="background-color:black;color:white;" @endif>{{ $i + 1 }}</a></li>
                                    @endfor
                                    @if ($page + 1 <= $page_num)
                                        <li><a href="/advertiser/dashboard?page={{ $page + 1 }}">Next &raquo</a></li>
                                    @endif
                                    </nav>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fallowers_agile agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Billings</h3>
                    <div class="work-progres">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task</th>
                                        <th>Amount</th>
                                        <th>Billed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n = 1; ?>
                                    @foreach ($leads as $lead)
                                        <tr>
                                            <td>{{ $n }}</td>
                                            <td>{{ $lead->task()->first()->name }}</td>
                                            <td>₦3.00</td>

                                            <td><span class="label label-info">Billed <i class="fa fa-check"></i></span>
                                            </td>
                                        </tr>
                                        <?php $n++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                            @if ($page_num_l >= 1)
                                <ul class="pagination">
                                    @if ($page_l - 1 >= 0)
                                        <li><a href="/advertiser/dashboard?page_l={{ $page_l - 1 }}">&laquo Prev</a></li>
                                    @endif
                                    @for ($i = 0; $i <= $page_num_l; $i++)
                                        <li><a href="/advertiser/dashboard?page_l={{ $i }}"
                                                @if ($i == $page_l) style="background-color:black;color:white;" @endif>{{ $i + 1 }}</a></li>
                                    @endfor
                                    @if ($page_l + 1 <= $page_num_l)
                                        <li><a href="/advertiser/dashboard?page_l={{ $page_l + 1 }}">Next &raquo</a></li>
                                    @endif
                                    </nav>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!--//prograc-blocks_agileits-->

            <!-- /agile_top_w3_post_sections-->
            <div class="agile_top_w3_post_sections">
                <div class="col-md-6 agile_top_w3_post_info agile_info_shadow">
                    <div class="img_wthee_post1">
                        <h3 class="w3_inner_tittle"> Flip Clock</h3>
                        <div class="main-example">
                            <div class="clock"></div>
                            <div class="message"></div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
        <!-- //inner_content_w3_agile_info-->
    </div>
    <!-- //inner_content-->


@endsection

@section('chart-js')
    <!-- Chart code -->
    <script>
        var chart = AmCharts.makeChart("chartdiv", {
            "theme": "light",
            "type": "serial",
            "startDuration": 2,
            "dataProvider": [{
                "country": "USA",
                "visits": 4025,
                "color": "#FF0F00"
            }, {
                "country": "China",
                "visits": 1882,
                "color": "#FF6600"
            }, {
                "country": "Japan",
                "visits": 1809,
                "color": "#FF9E01"
            }, {
                "country": "Germany",
                "visits": 1322,
                "color": "#FCD202"
            }, {
                "country": "UK",
                "visits": 1122,
                "color": "#F8FF01"
            }, {
                "country": "France",
                "visits": 1114,
                "color": "#B0DE09"
            }, {
                "country": "India",
                "visits": 984,
                "color": "#04D215"
            }, {
                "country": "Spain",
                "visits": 711,
                "color": "#0D8ECF"
            }, {
                "country": "Netherlands",
                "visits": 665,
                "color": "#0D52D1"
            }, {
                "country": "Russia",
                "visits": 580,
                "color": "#2A0CD0"
            }, {
                "country": "South Korea",
                "visits": 443,
                "color": "#8A0CCF"
            }, {
                "country": "Canada",
                "visits": 441,
                "color": "#CD0D74"
            }, {
                "country": "Brazil",
                "visits": 395,
                "color": "#754DEB"
            }, {
                "country": "Italy",
                "visits": 386,
                "color": "#DDDDDD"
            }, {
                "country": "Taiwan",
                "visits": 338,
                "color": "#333333"
            }],
            "valueAxes": [{
                "position": "left",
                "axisAlpha": 0,
                "gridAlpha": 0
            }],
            "graphs": [{
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "colorField": "color",
                "fillAlphas": 0.85,
                "lineAlpha": 0.1,
                "type": "column",
                "topRadius": 1,
                "valueField": "visits"
            }],
            "depth3D": 40,
            "angle": 30,
            "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
            },
            "categoryField": "country",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0

            },
            "export": {
                "enabled": true
            }

        }, 0);
    </script>
    <!-- Chart code -->
@endsection
