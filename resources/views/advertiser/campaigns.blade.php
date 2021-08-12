@extends('layouts.dashboard-app')

@section('title')
    <title>Campaigns - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <style>
        .textarea {
            margin-right: 4px;
        }

        .no-radius {
            border-radius: none;
        }

        .post {
            display: flex;
        }

        .but {
            border-radius: 0px !important;
        }

    </style>
@endsection

@section('content')
    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">

            <!-- //agile_top_w3_post_sections-->
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Campaigns</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task Name</th>
                                    <th>Posts</th>

                                    <th>Total Views</th>
                                    <th>Amount Earned</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Facebook</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <li class="dropdown" style="list-style-type: none">
                                                <button data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle btn btn-default but">Share <i class="fa fa-share"></i></button>                                       
                                                <ul class="dropdown-menu drp-mnu">
                                                    <li> <a href="#"><i class="fa fa-whatsapp"></i> WhatsApp</a> </li>
                                                    <li> <a href="#"><i class="fa fa-facebook"></i> Facebook</a> </li>
                                                    <li> <a href="#"><i class="fa fa-twitter"></i> Twitter</a> </li>
                                                    <li> <a href="#"><i class="fa fa-telegram"></i> Telegram</a> </li> 
                                                </ul>
                                            </li>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info">50%</span></td>
                                    <td><span class="label label-danger">in progress</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Twitter</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <li class="dropdown" style="list-style-type: none">
                                                <button data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle btn btn-default but">Share <i class="fa fa-share"></i></button>                                       
                                                <ul class="dropdown-menu drp-mnu">
                                                    <li> <a href="#"><i class="fa fa-whatsapp"></i> WhatsApp</a> </li>
                                                    <li> <a href="#"><i class="fa fa-facebook"></i> Facebook</a> </li>
                                                    <li> <a href="#"><i class="fa fa-twitter"></i> Twitter</a> </li>
                                                    <li> <a href="#"><i class="fa fa-telegram"></i> Telegram</a> </li> 
                                                </ul>
                                            </li>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">100%</span></td>
                                    <td><span class="label label-success">Paid <i class="fa fa-check"></i></span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Google</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <button class="btn btn-default but">Share <i class="fa fa-share"></i></button>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">75%</span></td>
                                    <td><span class="label label-warning">in progress</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>LinkedIn</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <button class="btn btn-default but">Share <i class="fa fa-share"></i></button>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info">65%</span></td>
                                    <td><span class="label label-info">in progress</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tumblr</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <button class="btn btn-default but">Share <i class="fa fa-share"></i></button>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">95%</span></td>
                                    <td><span class="label label-warning">in progress</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tesla</td>
                                    <td>
                                        <div class="post">
                                            <input class="form form-control textarea" />
                                            <button class="btn btn-default but">Share <i class="fa fa-share"></i></button>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">95%</span></td>
                                    <td><span class="label label-info">Paid <i class="fa fa-check"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /w3ls_agile_circle_progress-->
            <!-- /chart_agile-->
            <br><br>

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
