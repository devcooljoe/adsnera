@extends('layouts.dashboard-app')

@section('title')
    <title>Edit Bank Details - {{ auth()->user()->name }}</title>
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
                <h3 class="w3_inner_tittle two">Edit Your Bank Account</h3>
                <div class="form-body">
                    <form method="post" autocomplete="off" action="/account/profile/edit_bank">
                        @csrf
                        <div class="form-group"> <label for="exampleInputEmail1">Account Name (Required)</label> <input
                                type="text" name="account_name" class="form-control" id="exampleInputEmail1" placeholder=""
                                required value="{{ old('account_name') ?? $bank->account_name }}">@error('account_name')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="exampleInputPassword1">Account Number (Required)</label> <input
                                type="text" name="account_number" class="form-control" id="exampleInputPassword1"
                                placeholder="" required value="{{ old('account_number') ?? $bank->account_number }}">
                            @error('account_number')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"> <label for="bankname">Bank Name
                                (Required)</label>
                            <select type="text" style="padding: 0px;" name="bank_name" required class="form-control"
                                id="bankname">
                                <option>Choose Your Bank
                                </option>
                                <option value="Access Bank" {{ $bank->bank_name == 'Access Bank' ? 'selected' : '' }}>
                                    Access Bank</option>
                                <option value="Citibank" {{ $bank->bank_name == 'Citibank' ? 'selected' : '' }}>Citibank
                                </option>
                                <option value="Diamond Bank" {{ $bank->bank_name == 'Diamond Bank' ? 'selected' : '' }}>
                                    Diamond Bank</option>
                                <option value="Ecobank" {{ $bank->bank_name == 'Ecobank' ? 'selected' : '' }}>Ecobank
                                </option>
                                <option value="Fidelity Bank" {{ $bank->bank_name == 'Fidelity Bank' ? 'selected' : '' }}>
                                    Fidelity Bank</option>
                                <option value="First City Monument Bank (FCMB)"
                                    {{ $bank->bank_name == 'First City Monument Bank (FCMB)' ? 'selected' : '' }}>First
                                    City Monument Bank (FCMB)</option>
                                <option value="FSDH Merchant Bank"
                                    {{ $bank->bank_name == 'FSDH Merchant Bank' ? 'selected' : '' }}>FSDH Merchant Bank
                                </option>
                                <option value="Guarantee Trust Bank (GTB)"
                                    {{ $bank->bank_name == 'Guarantee Trust Bank (GTB)' ? 'selected' : '' }}>Guarantee
                                    Trust Bank (GTB)</option>
                                <option value="Heritage Bank"
                                    {{ $bank->bank_name == 'Heritage Bank' ? 'selected' : '' }}>Heritage Bank</option>
                                <option value="Keystone Bank"
                                    {{ $bank->bank_name == 'Keystone Bank' ? 'selected' : '' }}>Keystone Bank</option>
                                <option value="Rand Merchant Bank"
                                    {{ $bank->bank_name == 'Rand Merchant Bank' ? 'selected' : '' }}>Rand Merchant Bank
                                </option>
                                <option value="Skye Bank" {{ $bank->bank_name == 'Skye Bank' ? 'selected' : '' }}>Skye
                                    Bank</option>
                                <option value="Stanbic IBTC Bank"
                                    {{ $bank->bank_name == 'Stanbic IBTC Bank' ? 'selected' : '' }}>Stanbic IBTC Bank
                                </option>
                                <option value="Standard Chartered Bank"
                                    {{ $bank->bank_name == 'Standard Chartered Bank' ? 'selected' : '' }}>Standard
                                    Chartered Bank</option>
                                <option value="Sterling Bank"
                                    {{ $bank->bank_name == 'Sterling Bank' ? 'selected' : '' }}>Sterling Bank</option>
                                <option value="Suntrust Bank"
                                    {{ $bank->bank_name == 'Suntrust Bank' ? 'selected' : '' }}>Suntrust Bank</option>
                                <option value="Union Bank" {{ $bank->bank_name == 'Union Bank' ? 'selected' : '' }}>Union
                                    Bank</option>
                                <option value="United Bank for Africa (UBA)"
                                    {{ $bank->bank_name == '' ? 'selected' : '' }}>United Bank for Africa (UBA)</option>
                                <option value="Unity Bank" {{ $bank->bank_name == 'Unity Bank' ? 'selected' : '' }}>Unity
                                    Bank</option>
                                <option value="Wema Bank" {{ $bank->bank_name == 'Wema Bank' ? 'selected' : '' }}>Wema
                                    Bank</option>
                                <option value="Zenith Bank" {{ $bank->bank_name == 'Zenith Bank' ? 'selected' : '' }}>
                                    Zenith Bank</option>
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
                                <option value="savings" {{ $bank->account_type == 'savings' ? 'selected' : '' }}>Savings
                                </option>
                                <option value="current" {{ $bank->account_type == 'current' ? 'selected' : '' }}>Current
                                </option>
                                <option value="fixed" {{ $bank->account_type == 'fixed' ? 'selected' : '' }}>Fixed
                                </option>
                            </select>
                            @error('account_type')
                                <span style="font-size: 15px; color:darkred;">{{ $message }}</span>
                            @enderror
                        </div> <br>
                        <button type="submit" class="btn btn-default"><i class="fa fa-save"></i> Save Changes</button>
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
