@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="/style/seriesItem.css" />
@endsection

@section('page-title')
{{$serieName}}
@endsection

@section('content')
<div class="serie-information">
    <div class="image-serie">
        @if (!empty($responseImageLink))
        <img class="serie-image" src="{{$responseImageLink}}" alt="{{$serieName}}">
        @else
        <img class="serie-image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1200px-No-Image-Placeholder.svg.png" alt="{{$serieName}}">
        @endif
    </div>
    <div class="serie-description">
        <div>
            @if (!empty($responseRating))
            <p>Avaliação média: {{$responseRating}}</p>
            @else
            <p>Avaliação média indisponível.</p>
            @endif
        </div>
        <div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi molestias harum minima consequuntur cumque sapiente at nulla explicabo excepturi unde incidunt nostrum reiciendis corrupti inventore quos facilis consequatur, sunt numquam!</p>
        </div>
    </div>
</div>
@endsection
