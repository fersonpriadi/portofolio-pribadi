<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.4.2-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.4.2-web/css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap-5.0.2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap-5.0.2/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles-tambahan.css')}}">


        <title>WS-net.com</title>
    </head>
    <body class="body-html">
        <!--===== HEADER =====-->
        <!-- header section -->
        @include('template/navigasi-atas')

        <main class="l-main">
        <div>
            @yield('konten-about')
        </div>

        <div>
            @yield('konten-home')
        </div>

        <div>
            @yield('konten-skills')
        </div>

        <div>
            @yield('konten-work')
        </div>

        <div>
            @yield('konten-contact')
        </div>

        
        </main>

        <!--===== FOOTER =====-->
        
        @include('template/footer')

       <!--===== SCROLL REVEAL =====-->
       <script ript src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/fontawesome-free-6.4.2-web/js/all.min.js')}}"></script>
        <script src="{{asset('assets/fontawesome-free-6.4.2-web/js/fontawesome.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>
    </body>
</html>
