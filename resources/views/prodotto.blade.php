@extends('layouts.main')

@section('content')

<section class="prodotto">
    <h1>{{$pasta['titolo']}}</h1>
    <img src="{{$pasta['src-h']}}" alt="{{$pasta['titolo']}}">
    <img src="{{$pasta['src-p']}}" alt="{{$pasta['titolo']}}">
    <p>{!! $pasta['descrizione'] !!}</p>
</section>

@endsection