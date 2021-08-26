@extends('layouts.dashboard-app')

@section('title')
    <title>Profile - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@endsection

@section('content')

    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <h2 class="w3_inner_tittle two">Your Profile</h2>
            <h4>View Profile Info, Edit Profile, Add & Edit Bank Details</h4>
            <br>
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Profile Info</h3>
                <div class="table-responsive">
                    <table id="table-two-axis" class="two-axis">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ auth()->user()->name }}</td>

                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Account</td>
                                <td>{{ ucwords(
    auth()->user()->account()->first()->type,
) }}
                                    <div class="pull-right">
                                        <a href="/account/profile/switch" class="label label-default">
                                            @if (auth()->user()->advertiser())
                                                Switch To
                                                Promoter
                                            @else
                                                Switch To Advertiser
                                            @endif
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    @if (auth()->user()->active())
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-danger">Not Active</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <br>
            <!-- /w3ls_agile_circle_progress-->
            <!-- //agile_top_w3_post_sections-->
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                @if (auth()->user()->bank()->first()->account_name == null)
                    <a href="{{ route('index') }}/account/profile/new_bank" class=" pull-right badge badge-success"
                        style="font-size: 12px;padding:10px;"><i class="fa fa-plus"></i> Add Bank Account</a>
                @else
                    <a href="{{ route('index') }}/account/profile/edit_bank" class=" pull-right badge badge-success"
                        style="font-size: 12px;padding:10px;"><i class="fa fa-plus"></i> Edit Bank Account</a>
                @endif
                <h3 class="w3_inner_tittle two">Bank Details</h3>
                <div class="table-responsive">
                    <table id="table-two-axis" class="two-axis">
                        <tbody>
                            <tr>
                                <td>Account Name</td>
                                <td style="font-size:20px;"><span
                                        class="label label-primary">{{ ucwords(
    auth()->user()->bank()->first()->account_name,
) ?? '' }}</span>
                                </td>

                            </tr>
                            <tr>
                                <td>Account Number</td>
                                <td style="font-size:20px;"><span
                                        class="label label-primary">{{ ucwords(
    auth()->user()->bank()->first()->account_number,
) ?? '' }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Bank Name</td>
                                <td style="font-size:20px;"><span
                                        class="label label-primary">{{ ucwords(
    auth()->user()->bank()->first()->bank_name,
) ?? '' }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Account Type</td>
                                <td style="font-size:20px;"><span
                                        class="label label-primary">{{ ucwords(
    auth()->user()->bank()->first()->account_type,
) ?? '' }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
