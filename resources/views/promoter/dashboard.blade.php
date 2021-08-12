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

            <!-- //agile_top_w3_post_sections-->
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Recent Tasks Impressions</h3>

                <div id="chartdiv"></div>


            </div>
            <!-- /w3ls_agile_circle_progress-->
            <!-- /chart_agile-->
            <br><br>

            <!--/prograc-blocks_agileits-->
            <div class="prograc-blocks_agileits">

                <div class="col-md-6 bars_agileits agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Tasks</h3>
                    <div class="work-progres">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task Author</th>
                                        <th>Earned</th>

                                        <th>Views</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Face book</td>
                                        <td>Malorum</td>
                                        <td><span class="badge badge-info">50%</span></td>
                                        <td><span class="label label-danger">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Twitter</td>
                                        <td>Evan</td>
                                        <td><span class="badge badge-success">100%</span></td>
                                        <td><span class="label label-success">Paid <i class="fa fa-check"></i></span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Google</td>
                                        <td>John</td>
                                        <td><span class="badge badge-warning">75%</span></td>
                                        <td><span class="label label-warning">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LinkedIn</td>
                                        <td>Danial</td>
                                        <td><span class="badge badge-info">65%</span></td>
                                        <td><span class="label label-info">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tumblr</td>
                                        <td>David</td>
                                        <td><span class="badge badge-danger">95%</span></td>
                                        <td><span class="label label-warning">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tesla</td>
                                        <td>Mickey</td>
                                        <td><span class="badge badge-success">95%</span></td>
                                        <td><span class="label label-info">Paid <i class="fa fa-check"></i></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 fallowers_agile agile_info_shadow">
                    <h3 class="w3_inner_tittle two">Earnings From Tasks</h3>
                    <div class="work-progres">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Task Author</th>
                                        <th>Amount</th>

                                        <th>Paid</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Face book</td>
                                        <td>Malorum</td>

                                        <td><span class="label label-danger">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Twitter</td>
                                        <td>Evan</td>

                                        <td><span class="label label-success">completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Google</td>
                                        <td>John</td>

                                        <td><span class="label label-warning">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LinkedIn</td>
                                        <td>Danial</td>

                                        <td><span class="label label-info">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tumblr</td>
                                        <td>David</td>

                                        <td><span class="label label-warning">in progress</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tesla</td>
                                        <td>Mickey</td>

                                        <td><span class="label label-info">in progress</span></td>
                                    </tr>
                                </tbody>
                            </table>
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
