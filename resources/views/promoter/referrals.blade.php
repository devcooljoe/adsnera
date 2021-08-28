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
                        value="{{ route('index') . '/register/' . auth()->user()->id }}" id="refLink">
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
                                @foreach ($refs as $ref)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $ref->name }}</td>
                                        <td>{{ ucwords($ref->account_type) }}</td>
                                        <td>
                                            @if ($ref->account_status == 'active')
                                                <span class="label label-success">Active <i class="fa fa-check"></i></span>
                                            @else
                                                <span class="label label-danger">Not Active <i
                                                        class="fa fa-times"></i></span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($ref->paid == true)
                                                <span class="label label-success">Paid <i class="fa fa-check"></i></span>
                                            @else
                                                <span class="label label-danger">Not Paid <i class="fa fa-times"></i></span>
                                            @endif
                                        </td>
                                        <td>{{ App\Custom::date($ref->created_at) }}</td>
                                    </tr>
                                @endforeach
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
            $('#btnRefLink').html('Copied');
        }
    </script>
    <!-- //inner_content-->
@endsection
