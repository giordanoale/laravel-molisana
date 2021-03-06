@extends('layouts.main')

@section('pageTitle')
Homepage - La Molisana
@endsection

@section('content')
<main>
    <!-- sezione "lunghe" -->
    <div class="container">
        <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach($lunga as $pasta)
            <div class="card">
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </a>
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
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}">
                    <img class="zoom" src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </a>
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
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}">
                    <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- /sezione "cortissime" -->
</main>
@endsection