<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- /css -->

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- google font -->

    <title>La Molisana</title>
</head>

<body>

    <!-- intestazione -->
    @include('parts.header')
    <!-- /intestazione -->

    <!-- corpo principale -->
    <main>

        <!-- sezione "lunghe" -->
        <div class="container">
            <h2>Le Lunghe</h2>
            <div class="cards">
                @foreach($lunga as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                @endforeach
            </div>
        </div>
        <!-- /sezione "lunghe" -->

        <!-- /sezione "corte" -->
        <div class="container">
            <h2>Le Corte</h2>
            <div class="cards">
                @foreach($corta as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                @endforeach
            </div>
        </div>
        <!-- /sezione "corte" -->

        <!-- /sezione "cortissime" -->
        <div class="container">
            <h2>Le cortissime</h2>
            <div class="cards">
                @foreach($cortissima as $pasta)
                <div class="card">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </div>
                @endforeach
            </div>
        </div>
        <!-- /sezione "cortissime" -->

    </main>
    <!-- /corpo principale -->

    <!-- pie di pagina -->
    @include('parts.footer')
    <!-- /pie di pagina -->

</body>

</html>