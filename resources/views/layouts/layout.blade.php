<html>
    <head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="">

        <link rel="stylesheet" href="{{asset('css/main.css')}}">

         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('custom_css')
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="section-nav">
                <ul class="nav-list">
                    <li class="logo"><a href="#">Master Kids</a></li>
                    <li class="item"><a href="./catalog">Products</a></li>
                    <li class="item"><a href="#">Stores</a></li>
                    <li class="item"><a href="#">About Us</a></li>
                </ul>
            </div>
            @yield('content');
            <footer>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">

                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{asset('js/jquery-3.4.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery-ui/jquery-ui.js')}}" type="text/javascript"></script>
        @yield('custom_js');
    </body>
</html>
