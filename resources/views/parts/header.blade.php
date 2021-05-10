<header>

    <div class="container">

        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="">
        </div>
        <!-- /logo -->

        <!-- barra di navigazione -->
        <nav class="main-nav">
            <ul>
                <li><a class="active" href="{{route('homepage')}}">Home</a></li>
                <li><a href="/prodotto/0">Prodotti</a></li>
                <li><a href="{{route('news')}}">News</a></li>
            </ul>
        </nav>
        <!-- /barra di navigazione -->
    </div>

</header>