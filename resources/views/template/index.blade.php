<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/all.min.css">
        <link rel="stylesheet" href="assets/fontawesome-free-6.4.2-web/css/fontawesome.min.css">

        <title>Ws-net.com</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <!-- header section -->
        @include('template/navigasi-atas')
        <main class="l-main">
            <!--===== HOME =====-->
       <!-- section home -->
       @include('template/home')

            <!--===== ABOUT =====-->
        @include('template/about')

            <!--===== SKILLS =====-->
        @include('template/skills')

            <!--===== WORK =====-->
        @include('template/work')            

            <!--===== CONTACT =====-->
        @include('template/contact')
        </main>

        <!--===== FOOTER =====-->
        
        @include('template/footer')

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
        <script src="assets/fontawesome-free-6.4.2-web/js/all.min.js"></script>
        <script src="assets/fontawesome-free-6.4.2-web/js/fontawesome.min.js"></script>
    </body>
</html>
