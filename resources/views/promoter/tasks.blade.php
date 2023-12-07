@extends('layouts.dashboard-app')

@section('title')
    <title>Tasks - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <style>
        .text-area {
            height: 40px;
            outline: none;
            border-color: grey;
            width: 100%;
        }

        .text-area::-webkit-scrollbar {
            width: 0px;
        }

        .text-area::-webkit-scrollbar-thumb {
            width: 0px;

        }

        .text-area::-webkit-scrollbar-button {
            width: 0px;
        }

        .text-area::-webkit-scrollbar-track {
            width: 0px;
        }
    </style>
@endsection

@section('content')
    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <h2 class="w3_inner_tittle two">Promoter Dashboard</h2>
            @if ($count > 0)
                <h4>Note: You must share only {{ $count }} post{{ $count > 1 ? 's' : '' }}. Share the one your
                    audience
                    is mostly interested in.</h4>
            @else
                <h4>You have no task at the moment.</h4>
            @endif
            <br>
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
                                    <th>Post Author</th>
                                    <th>Posts</th>
                                    <th>Share Posts</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($count > 0)
                                    @php $i = 1; @endphp
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $task->user()->first()->name }}</td>
                                            <td>
                                                <div class="post">
                                                    <input class="text-area form-control" id="taskLink{{ $task->id }}"
                                                        name=""
                                                        value="{{ $task->title }} {{ route('index') }}/posts/{{ $task->custom_id }}?id={{ $task->user()->first()->id }}">

                                                </div>
                                            </td>
                                            <td>
                                                <a href="whatsapp://send?text={{ $task->title }} {{ route('index') }}/posts/{{ $task->custom_id }}?id={{ $task->user()->first()->id }}"
                                                    class="label label-success"><i class="fa fa-whatsapp"></i>
                                                    WhatsApp</a>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('index') }}/posts/{{ $task->custom_id }}?id={{ $task->user()->first()->id }}"
                                                    class="label label-primary"><i class="fa fa-facebook"></i>
                                                    Facebook</a>
                                                <span id="btnTaskLink{{ $task->id }}"
                                                    onclick="copyLink({{ $task->id }})" class="label label-default"
                                                    style="cursor: pointer;"><i class="fa fa-copy"></i>
                                                    Copy</span>

                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                        {{ $tasks->onEachSide(4)->links() }}
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
    <script>
        function copyLink(id) {
            var textcopy = document.getElementById('taskLink' + id);
            textcopy.select();
            document.execCommand('copy');
            $('#btnTaskLink' + id).html('<i class="fa fa-copy"></i> Copied');
        }
    </script>
    <!-- //inner_content-->
@endsection
