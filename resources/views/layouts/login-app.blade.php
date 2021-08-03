<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>

    @yield('title')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="{{ route('index') }}/css/style-login.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="{{ route('index') }}/css/fontawesome-all.min.css" type="text/css" media="all">
    <script src="{{ route('index') }}/js/jquery-2.2.3.min.js"></script>


</head>

<body>

    @yield('content')

    <!-- copyright-->
        <div class="copyright text-center"> &copy; Adsnera,
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved.
        </div>
        <!-- //copyright-->
    </section>


    <script type="text/javascript">
        $('.input').focus(function() {
            $('.input').removeClass('invalid-entry');
        });
        $('.view-p').click(function() {
            $('.login-password').attr('type', 'text');
            $('.view-p').css('display', 'none');
            $('.hide-p').css('display', 'block');
        });

        $('.hide-p').click(function() {
            $('.login-password').attr('type', 'password');
            $('.hide-p').css('display', 'none');
            $('.view-p').css('display', 'block');
        });
    </script>
</body>

</html>
