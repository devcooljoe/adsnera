@extends('layouts.dashboard-app')

@section('title')
    <title>Admin Dashboard - {{ auth()->user()->name }}</title>
    <meta name="keywords"
        content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
@endsection

@section('content')

    <!-- /inner_content-->
    <div class="inner_content">
        <!-- /inner_content_w3_agile_info-->
        <div class="inner_content_w3_agile_info">
            <h2 class="w3_inner_tittle two">Admin Dashboard</h2>
            <h4>View Posts, Edit Posts, Delete Posts</h4>
            <br>
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">
                    <a href="{{ route('index') }}/posts/new" class="badge badge-primary"
                        style="font-size: 20px;padding:10px;"><i class="fa fa-plus"></i> New Post</a>
                </h3>

            </div>
            <br>
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Your Posts</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1; ?>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $num }}</td>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            @if ($post->status == 'approved')
                                                <span class="label label-success">{{ ucwords($post->status) }}</span>
                                            @elseif($post->status == 'declined')
                                                <span class="label label-danger">{{ ucwords($post->status) }}</span>
                                            @else
                                                <span class="label label-warning">{{ ucwords($post->status) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ App\Custom::date($post->created_at) }}</td>
                                        <td>
                                            <a href="/posts/{{ $post->custom_id }}" class="label label-primary"
                                                style="margin:5px;">View</a>
                                            <a href="/posts/{{ $post->id }}/edit" class="label label-success"
                                                style="margin:5px;">Edit</a>
                                            <span onclick="delPost({{ $post->id }}, '{{ $post->title }}')"
                                                class="label label-danger" style="margin:5px;cursor: pointer;">Delete</span>
                                        </td>
                                    </tr>
                                    <?php $num++; ?>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($page_num >= 1)
                            <ul class="pagination">
                                @if ($page - 1 >= 0)
                                    <li><a href="/admin?page={{ $page - 1 }}">&laquo Prev</a></li>
                                @endif
                                @for ($i = 0; $i <= $page_num; $i++)
                                    <li><a href="/admin?page={{ $i }}"
                                            @if ($i == $page) style="background-color:black;color:white;" @endif>{{ $i + 1 }}</a></li>
                                @endfor
                                @if ($page + 1 <= $page_num)
                                    <li><a href="/admin?page={{ $page + 1 }}">Next &raquo</a></li>
                                @endif
                                </nav>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /w3ls_agile_circle_progress-->
            <br><br>
            <!-- /w3ls_agile_circle_progress-->
            <div class="w3ls_agile_cylinder chart agile_info_shadow">
                <h3 class="w3_inner_tittle two">Pending Campaigns</h3>
                <div class="work-progres">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num = 1; ?>
                                @foreach ($campaigns as $post)
                                    <tr>
                                        <td>{{ $num }}</td>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->user->name }}</td>
                                        <td>
                                            @if ($post->status == 'approved')
                                                <span class="label label-success">{{ ucwords($post->status) }}</span>
                                            @elseif($post->status == 'declined')
                                                <span class="label label-danger">{{ ucwords($post->status) }}</span>
                                            @else
                                                <span class="label label-warning">{{ ucwords($post->status) }}</span>
                                            @endif
                                        </td>
                                        <td>{{ App\Custom::date($post->created_at) }}</td>
                                        <td>
                                            <a href="/campaign/{{ $post->id }}" target="_blank"
                                                class="label label-primary" style="margin:5px;">View</a>
                                            <span
                                                onclick="approveCampaign({{ $post->id }}, '{{ $post->user->name }}')"
                                                class="label label-success"
                                                style="margin:5px;cursor: pointer;">Approve</span>
                                            <span onclick="delCampaign({{ $post->id }}, '{{ $post->user->name }}')"
                                                class="label label-danger" style="margin:5px;cursor: pointer;">Delete</span>
                                        </td>
                                    </tr>
                                    <?php $num++; ?>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($page_num >= 1)
                            <ul class="pagination">
                                @if ($page - 1 >= 0)
                                    <li><a href="/admin?page_l={{ $page - 1 }}">&laquo Prev</a></li>
                                @endif
                                @for ($i = 0; $i <= $page_num; $i++)
                                    <li><a href="/admin?page_l={{ $i }}"
                                            @if ($i == $page) style="background-color:black;color:white;" @endif>{{ $i + 1 }}</a></li>
                                @endfor
                                @if ($page + 1 <= $page_num)
                                    <li><a href="/admin?page_l={{ $page + 1 }}">Next &raquo</a></li>
                                @endif
                                </nav>
                            </ul>
                        @endif
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
