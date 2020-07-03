<!DOCTYPE html>
<html>
    <head>
        <title>MelodyMemory</title>
        <link href="{{ asset('css/application.min.css') }}" rel="stylesheet">
        <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
        <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Sing App - Bootstrap 4 Admin Dashboard Template">
        <meta name="keywords" content="bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
        <meta name="author" content="Flatlogic LLC">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script>
            /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
            chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
            https://code.google.com/p/chromium/issues/detail?id=332189
            */
        </script>
    </head>
<body>
    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
