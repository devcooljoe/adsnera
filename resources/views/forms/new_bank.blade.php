@extends('layouts.dashboard-app')

@section('title')
    <title>New Bank Account - {{ auth()->user()->name }}</title>
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

            <div class="graph-form agile_info_shadow">
                <h3 class="w3_inner_tittle two">Add Your Bank Account</h3>
                <div class="form-body">
                    <form method="post" autocomplete="off" action="/account/profile/new_bank">
                        @csrf
                        <div class="form-group"> <label for="exampleInputEmail1">Account Name (Required)</label> <input
                                type="text" name="account_name" class="form-control" id="exampleInputEmail1" placeholder=""
                                required value="{{ old('account_name') ?? '' }}">@error('account_name')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1">Account Number (Required)</label> <input
                                type="text" name="account_number" class="form-control" id="exampleInputPassword1"
                                placeholder="" required value="{{ old('account_number') ?? '' }}">
                            @error('account_number')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="bankname">Bank Name
                                (Required)</label>
                            <select style="padding: 0px;" type="text" name="bank_name" required class="form-control"
                                id="bankname">
                                <option selected>Choose Your Bank</option>
                                <option value="Access Bank">Access Bank</option>
                                <option value="Citibank">Citibank</option>
                                <option value="Diamond Bank">Diamond Bank</option>
                                <option value="Ecobank">Ecobank</option>
                                <option value="Fidelity Bank">Fidelity Bank</option>
                                <option value="First City Monument Bank (FCMB)">First City Monument Bank (FCMB)</option>
                                <option value="FSDH Merchant Bank">FSDH Merchant Bank</option>
                                <option value="Guarantee Trust Bank (GTB)">Guarantee Trust Bank (GTB)</option>
                                <option value="Heritage Bank">Heritage Bank</option>
                                <option value="Keystone Bank">Keystone Bank</option>
                                <option value="Rand Merchant Bank">Rand Merchant Bank</option>
                                <option value="Skye Bank">Skye Bank</option>
                                <option value="Stanbic IBTC Bank">Stanbic IBTC Bank</option>
                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                <option value="Sterling Bank">Sterling Bank</option>
                                <option value="Suntrust Bank">Suntrust Bank</option>
                                <option value="Union Bank">Union Bank</option>
                                <option value="United Bank for Africa (UBA)">United Bank for Africa (UBA)</option>
                                <option value="Unity Bank">Unity Bank</option>
                                <option value="Wema Bank">Wema Bank</option>
                                <option value="Zenith Bank">Zenith Bank</option>
                            </select>
                            @error('bank_name')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="acct_type">Account Type
                                (Required)</label>
                            <select style="padding: 0px;" type="text" name="account_type" required class="form-control"
                                id="acct_type">
                                <option selected>Choose Your Account Type</option>
                                <option value="savings">Savings</option>
                                <option value="current">Current</option>
                                <option value="fixed">Fixed</option>
                            </select>
                            @error('account_type')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i> Add Bank</button>
                    </form>
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
