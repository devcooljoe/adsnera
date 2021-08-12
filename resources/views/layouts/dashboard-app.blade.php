<!DOCTYPE html>
<html lang="zxx">

<head>

    @yield('title')
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link rel="stylesheet" href="{{ route('index') }}/css/alert.css">
    <link href="{{ route('index') }}/board/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/export.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/circles.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ route('index') }}/board/css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- font-awesome-icons -->
    <link href="{{ route('index') }}/board/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ route('index') }}/images/logo.png">
    <link rel="shortcut-icon" href="{{ route('index') }}/images/logo.png" type="image/png">
</head>

<body>
    <?php
    if (request('alert')) {
        echo App\Custom::alert();
    }
    ?>
    <!-- banner -->
    <div class="wthree_agile_admin_info">
        <!-- /w3_agileits_top_nav-->
        <!-- /nav-->
        <div class="w3_agileits_top_nav">
            <ul id="gn-menu" class="gn-menu-main">
                <!-- /nav_agile_w3l -->
                <li class="gn-trigger">
                    <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller scrollbar1">
                            <ul class="gn-menu agile_menu_drop">
                                <li><a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a></li>
                                @if (auth()->user()->advertiser())
                                    <li>
                                        <a href="/advertiser/dashboard">
                                            <i class="fa fa-tachometer"></i> Dashboard</a>
                                    </li>
                                    <li><a href="/advertiser/campaigns"><i class="fa fa-tasks"></i> Campaigns</a></li>
                                    <li><a href="/advertiser/wallet"><i class="fa fa-money"></i> Wallet</a></li>
                                @else
                                    <li>
                                        <a href="/promoter/dashboard">
                                            <i class="fa fa-tachometer"></i> Dashboard</a>
                                    </li>
                                    <li><a href="/promoter/tasks"><i class="fa fa-tasks"></i> Tasks</a></li>
                                    <li><a href="/promoter/wallet"><i class="fa fa-money"></i> Wallet</a></li>
                                    <li><a href="/account/referrals"><i class="fa fa-chain"></i> Referrals</a></li>
                                @endif

                                <li><a href="/account/profile"><i class="fa fa-list"></i> Profile</a></li>
                                <li>
                                    <a href="#"> <i class="fa fa-suitcase" aria-hidden="true"></i>More <i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="gn-submenu">
                                        <li class="mini_list_w3"><a href="/account/settings"> <i
                                                    class="fa fa-caret-right" aria-hidden="true"></i>Settings</a></li>
                                        <li class="mini_list_agile"><a href="/#faqs"> <i class="fa fa-caret-right"
                                                    aria-hidden="true"></i>FAQs</a></li>
                                        <li class="mini_list_w3"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>Logout</a></li>
                                    </ul>
                                </li>
                                <br><br><br><br><br><br><br>
                            </ul>
                        </div><!-- /gn-scroller -->
                    </nav>
                </li>
                <!-- //nav_agile_w3l -->
                <li class="second logo">
                </li>
                <li class="second admin-pic">
                    <ul class="top_dp_agile">
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img src="{{ route('index') }}/board/images/avatar.png"
                                            alt="" class="img img-responsive" style="width: 50px;"> </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                <li> <a href="/account/settings"><i class="fa fa-cog"></i> Settings</a> </li>
                                <li> <a href="/account/profile"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i
                                            class="fa fa-sign-out"></i> Logout</a> </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>

                    </ul>
                </li>
                {{-- <li class="second top_bell_nav">
                    <ul class="top_dp_agile ">
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i
                                    class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge blue">4</span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="notification_header">
                                        <h3>Your Notifications</h3>
                                    </div>
                                </li>
                                <li><a href="#">
                                        <div class="user_img"><img src="{{ route('index') }}/board/images/a3.jpg"
                                                alt=""></div>
                                        <div class="notification_desc">
                                            <h6>John Smith</h6>
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li class="odd"><a href="#">
                                        <div class="user_img"><img src="{{ route('index') }}/board/images/a1.jpg"
                                                alt=""></div>
                                        <div class="notification_desc">
                                            <h6>Jasmin Leo</h6>
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>3 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="{{ route('index') }}/board/images/a2.jpg"
                                                alt=""></div>
                                        <div class="notification_desc">
                                            <h6>James Smith</h6>
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>2 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li><a href="#">
                                        <div class="user_img"><img src="{{ route('index') }}/board/images/a4.jpg"
                                                alt=""></div>
                                        <div class="notification_desc">
                                            <h6>James Smith</h6>
                                            <p>Lorem ipsum dolor</p>
                                            <p><span>1 hour ago</span></p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a></li>
                                <li>
                                    <div class="notification_bottom">
                                        <a href="#">See all Notifications</a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li> --}}

                <li class="second w3l_search" style="border:none; display:flex;">
                    <div class="account-balance">
                        <strong>BALANCE</strong>
                    </div>
                    <div class="account-balance-2">
                        <strong>₦{{ number_format(
    auth()->user()->wallet()->first()->amount,
    2,
) }}</strong>
                    </div>
                </li>

            </ul>
            <!-- //nav -->

        </div>
        <div class="clearfix"></div>
        <!-- //w3_agileits_top_nav-->





        @yield('content')








    </div>
    <!-- banner -->
    <!--copy rights start here-->
    <div class="copyrights">
        <p>&copy; Adsnera,
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved. </p>
    </div>
    <!--copy rights end here-->
    <!-- js -->

    <script type="text/javascript" src="{{ route('index') }}/board/js/jquery-2.1.4.min.js"></script>

    <!-- /amcharts -->
    <script src="{{ route('index') }}/board/js/amcharts.js"></script>
    <script src="{{ route('index') }}/board/js/serial.js"></script>
    <script src="{{ route('index') }}/board/js/export.js"></script>
    <script src="{{ route('index') }}/board/js/light.js"></script>

    @yield('chart-js')
    <script>
        var chart = AmCharts.makeChart("chartdiv1", {
            "type": "serial",
            "theme": "light",
            "legend": {
                "horizontalGap": 10,
                "maxColumns": 1,
                "position": "right",
                "useGraphSettings": true,
                "markerSize": 10
            },
            "dataProvider": [{
                "year": 2017,
                "europe": 2.5,
                "namerica": 2.5,
                "asia": 2.1,
                "lamerica": 0.3,
                "meast": 0.2,
                "africa": 0.1
            }, {
                "year": 2016,
                "europe": 2.6,
                "namerica": 2.7,
                "asia": 2.2,
                "lamerica": 0.3,
                "meast": 0.3,
                "africa": 0.1
            }, {
                "year": 2015,
                "europe": 2.8,
                "namerica": 2.9,
                "asia": 2.4,
                "lamerica": 0.3,
                "meast": 0.3,
                "africa": 0.1
            }],
            "valueAxes": [{
                "stackType": "regular",
                "axisAlpha": 0.5,
                "gridAlpha": 0
            }],
            "graphs": [{
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "Europe",
                "type": "column",
                "color": "#000000",
                "valueField": "europe"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "North America",
                "type": "column",
                "color": "#000000",
                "valueField": "namerica"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "Asia-Pacific",
                "type": "column",
                "color": "#000000",
                "valueField": "asia"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "Latin America",
                "type": "column",
                "color": "#000000",
                "valueField": "lamerica"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "Middle-East",
                "type": "column",
                "color": "#000000",
                "valueField": "meast"
            }, {
                "balloonText": "<b>[[title]]</b><br><span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>",
                "fillAlphas": 0.8,
                "labelText": "[[value]]",
                "lineAlpha": 0.3,
                "title": "Africa",
                "type": "column",
                "color": "#000000",
                "valueField": "africa"
            }],
            "rotate": true,
            "categoryField": "year",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0,
                "position": "left"
            },
            "export": {
                "enabled": true
            }
        });
    </script>

    <!-- //amcharts -->
    <script src="{{ route('index') }}/board/js/chart1.js"></script>
    <script src="{{ route('index') }}/board/js/Chart.min.js"></script>
    <script src="{{ route('index') }}/board/js/modernizr.custom.js"></script>

    <script src="{{ route('index') }}/board/js/classie.js"></script>
    <script src="{{ route('index') }}/board/js/gnmenu.js"></script>
    <script>
        new gnMenu(document.getElementById('gn-menu'));
    </script>
    <!-- script-for-menu -->

    <!-- /circle-->
    <script type="text/javascript" src="{{ route('index') }}/board/js/circles.js"></script>
    <script>
        var colors = [
            ['#ffffff', '#fd9426'],
            ['#ffffff', '#fc3158'],
            ['#ffffff', '#53d769'],
            ['#ffffff', '#147efb']
        ];
        for (var i = 1; i <= 7; i++) {
            var child = document.getElementById('circles-' + i),
                percentage = 30 + (i * 10);

            Circles.create({
                id: child.id,
                percentage: percentage,
                radius: 80,
                width: 10,
                number: percentage / 1,
                text: '%',
                colors: colors[i - 1]
            });
        }
    </script>
    <!-- //circle -->
    <!--skycons-icons-->
    <script src="{{ route('index') }}/board/js/skycons.js"></script>
    <script>
        var icons = new Skycons({
                "color": "#fcb216"
            }),
            list = [
                "partly-cloudy-day"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    </script>
    <script>
        var icons = new Skycons({
                "color": "#fff"
            }),
            list = [
                "clear-night", "partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind", "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
    </script>
    <!--//skycons-icons-->
    <!-- //js -->
    <script src="{{ route('index') }}/board/js/screenfull.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <script src="{{ route('index') }}/board/js/flipclock.js"></script>

    <script type="text/javascript">
        var clock;

        $(document).ready(function() {

            clock = $('.clock').FlipClock({
                clockFace: 'HourlyCounter'
            });
        });
    </script>
    <script src="{{ route('index') }}/board/js/bars.js"></script>
    <script src="{{ route('index') }}/board/js/jquery.nicescroll.js"></script>
    <script src="{{ route('index') }}/board/js/scripts.js"></script>

    <script type="text/javascript" src="{{ route('index') }}/board/js/bootstrap-3.1.1.min.js"></script>


    <script type="text/javascript">
        $('#custom-alert-close').click(function() {
            $('#custom-alert').slideToggle();
        });
    </script>
</body>

</html>
