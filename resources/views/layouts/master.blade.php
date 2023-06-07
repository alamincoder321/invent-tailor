<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('noImage.png')}}" type="image/gif" sizes="80x80">
    <link href="{{asset('backend')}}/css/styles.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/css/custom.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @include("layouts.backend.navbar")
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include("layouts.backend.sidebar")

        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">@yield('bread_crum')</h1>
                    @yield("content")
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website {{date('Y')}}</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('backend')}}/js/scripts.js"></script>
</body>

</html>