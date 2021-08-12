@extends('layouts.dashboard-app')

@section('title')
    <title>Referrals - {{ auth()->user()->name }}</title>
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
                <h3 class="w3_inner_tittle two">Referral Link</h3>
                <div style="display: flex;">
                    <button class="btn btn-primary" onclick="copyLink()" style="border-radius: 7px 0px 0px 7px"
                        id="btnRefLink">Copy
                        Link</button><input readonly type="text" class="form-control img-responsive" style="width:250px;"
                        value="{{ route('index') . '/' . auth()->user()->id }}" id="refLink">
                </div>

            </div>
            <!-- /w3ls_agile_circle_progress-->

            <br><br>

            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Referral Tree</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Referred User</th>
                                    <th>Account</th>
                                    <th>User Status</th>
                                    <th>Payment</th>
                                    <th>Date Registered</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Face book</td>
                                    <td>Malorum</td>
                                    <td><span class="label label-success">Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-warning">in progress</span></td>
                                    <td>12-12-2021</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Twitter</td>
                                    <td>Evan</td>
                                    <td><span class="label label-">Not Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-success">Paid <i class="fa fa-check"></i></span></td>
                                    <td>12-12-2021</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Google</td>
                                    <td>John</td>
                                    <td><span class="label label-success">Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-danger">in progress</span></td>
                                    <td>12-12-2021</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>LinkedIn</td>
                                    <td>Danial</td>
                                    <td><span class="label label-success">Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-danger">in progress</span></td>
                                    <td>12-12-2021</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Tumblr</td>
                                    <td>David</td>
                                    <td><span class="label label-success">Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-danger">in progress</span></td>
                                    <td>12-12-2021</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tesla</td>
                                    <td>Mickey</td>
                                    <td><span class="label label-success">Active<i class="fa fa-check"></i></span></td>
                                    <td><span class="label label-danger">in progress</span></td>
                                    <td>12-12-2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /w3ls_agile_circle_progress-->


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
    <script>
        function copyLink() {
            var textcopy = document.getElementById('refLink');
            textcopy.select();
            document.execCommand('copy');
        }
    </script>
    <!-- //inner_content-->
@endsection
