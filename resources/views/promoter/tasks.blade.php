@extends('layouts.dashboard-app')

@section('title')
    <title>Tasks - {{ auth()->user()->name }}</title>
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
                <h3 class="w3_inner_tittle two">Tasks</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task Author</th>
                                    <th>Posts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $task->user()->first()->name }}</td>
                                        <td>
                                            <div class="post">
                                                <input class="form form-control textarea"
                                                    value="{{ route('index') }}/viewcampaign/{{ $task->id }}/{{ $task->user()->first()->id }}" />
                                                <li class="dropdown" style="list-style-type: none">
                                                    <button data-toggle="dropdown" aria-expanded="false"
                                                        class="dropdown-toggle btn btn-default but">Share <i
                                                            class="fa fa-share"></i></button>
                                                    <ul class="dropdown-menu drp-mnu">
                                                        <li> <a href="#"> WhatsApp</a> </li>
                                                        <li> <a href="#"> Facebook</a> </li>
                                                        <li> <a href="#"> Twitter</a> </li>
                                                        <li> <a href="#"> Telegram</a> </li>
                                                    </ul>
                                                </li>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
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
