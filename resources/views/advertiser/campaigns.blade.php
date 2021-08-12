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

            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">
                    <a href="{{ route('index') }}/advertiser/campaigns/new" class="badge badge-primary"
                        style="font-size: 20px;padding:10px;"><i class="fa fa-plus"></i> New Campaign</a>
                </h3>

            </div>
            <br>
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
                                    <th>Name</th>
                                    <th>Caption</th>

                                    <th>Status</th>
                                    <th>Total Views</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $task->name }}</td>
                                        <td>{{ substr($task->caption, 0, 100) }}{{ strlen($task->caption) > 100 ? '...' : '' }}
                                        </td>
                                        <td>
                                            @if ($task->status == 'active')
                                                <span class="label label-success">{{ ucwords($task->status) }}</span>
                                            @else
                                                <span class="label label-warning">{{ ucwords($task->status) }}</span>
                                            @endif

                                        </td>
                                        <td>
                                            <span class="badge badge-info">
                                                {{ $task->view()->get()->count() > 0
    ? $task->view()->get()->count()
    : 'No Views' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div style="display: flex;">
                                                <a href="#" class="label label-info" style="margin:5px;">View</a>
                                                <a href="/advertiser/campaigns/{{ $task->id }}/edit"
                                                    class="label label-success" style="margin:5px;">Edit</a>
                                                <a href="/advertiser/campaigns/{{ $task->id }}/delete"
                                                    class="label label-danger" style="margin:5px;">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $count++; ?>
                                @endforeach
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
