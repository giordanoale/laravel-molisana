@extends('layouts.main')

@section('fontawesome')
<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<!-- /fontawesome -->
@endsection

@section('content')

<section class="prodotto">
    <h1>{{$pasta['titolo']}}</h1>
    <img src="{{$pasta['src-h']}}" alt="{{$pasta['titolo']}}">
    <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
    <p>{!! $pasta['descrizione'] !!}</p>

    <div class="arrow left">
        <a href="{{route('prodotto', [ $prev ])}}">
            <i class="fas fa-chevron-left"></i>
        </a>
    </div>

    <div class="arrow right">
        <a href="{{route('prodotto', [ $next ])}}">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
</section>

@endsection