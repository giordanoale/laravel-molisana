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
                <li><a class="{{ Route::getCurrentRoute()->getName() == 'homepage'? 'active' : '' }}" href="{{route('homepage')}}">Home</a></li>
                <li><a class="{{ Route::getCurrentRoute()->getName() == 'prodotto'? 'active' : '' }}" href="{{route('prodotto', [ 'id' => 0 ])}}">Prodotti</a></li>
                <li><a class="{{ Route::getCurrentRoute()->getName() == 'news'? 'active' : '' }}" href="{{route('news')}}">News</a></li>
            </ul>
        </nav>
        <!-- /barra di navigazione -->
    </div>

</header>