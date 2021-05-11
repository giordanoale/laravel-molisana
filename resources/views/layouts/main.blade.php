<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('fontawesome')
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- /css -->

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- google font -->

    <title>@yield('pageTitle')</title>
</head>

<body>

    <!-- intestazione -->
    @include('parts.header')
    <!-- /intestazione -->

    <!-- corpo principale -->
    
    @yield('content')
    
    <!-- /corpo principale -->

    <!-- pie di pagina -->
    @include('parts.footer')
    <!-- /pie di pagina -->

</body>

</html>