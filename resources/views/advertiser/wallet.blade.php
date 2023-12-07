@extends('layouts.dashboard-app')

@section('title')
    <title>Wallet - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@endsection

@section('content')
    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <h2 class="w3_inner_tittle two">Account Balance</h2>
            <h4>Fund wallet, View deposits</h4>
            <br>
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">

                <h3 class="w3_inner_tittle two">Wallet Balance</h3>
                <table id="table">
                    <thead>
                        <tr>
                            <th>Account Balance:
                                ₦{{ number_format(
                                    auth()->user()->wallet()->first()->amount,
                                    2,
                                ) }}
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <br>
            <!-- /w3ls_agile_circle_progress-->
            <!-- //agile_top_w3_post_sections-->
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                @if (Session::get('response-success'))
                    <div class="alert alert-success" id="withdraw-alert1">
                        <strong>Success!</strong> {{ Session::get('response-success') }}
                    </div>
                @endif
                @if (Session::has('response-error'))
                    <div class="alert alert-danger" id="withdraw-alert2">
                        <strong>Error!</strong> {{ Session::get('response-error') }}
                    </div>
                @endif
                <h3 class="w3_inner_tittle two" id="fund-wallet">Fund Your Wallet</h3>
                <table id="table">
                    <thead>
                        <tr>
                            <p>Minimum Deposit is ₦1,000 </p>
                            <form action="/advertiser/wallet/fund" method="post">
                                @csrf
                                <th>
                                    <div class="input-group">
                                        <div class="input-group-addon" style="font-size: 15px;">₦</div>
                                        <input id="deposit-input" required name="amount" type="text"
                                            style="font-size: 15px;" required placeholder="Enter the amount to deposit"
                                            class="form-control1 icon">
                                    </div>
                                    <input type="submit" value="Make Payment" class="btn btn-primary">
                                </th>
                            </form>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- /w3ls_agile_circle_progress-->
            <!-- /chart_agile-->
            <br><br>

            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Deposits</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $num = 1; @endphp
                                @foreach ($deposits as $deposit)
                                    <tr>
                                        <td>{{ $num }}</td>
                                        <td>₦{{ number_format($deposit->amount, 2) }}</td>
                                        <td>{{ App\Custom::date($deposit->created_at) }}</td>
                                        <td>
                                            @if ($deposit->status == 'successful')
                                                <span class="label label-success">{{ ucwords($deposit->status) }}</span>
                                            @elseif($deposit->status == 'unsuccessful')
                                                <span class="label label-danger">{{ ucwords($deposit->status) }}</span>
                                            @else
                                                <span class="label label-warning">{{ ucwords($deposit->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @php $num++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{ $deposits->onEachSide(4)->links() }}
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
    <!-- //inner_content-->
@endsection
