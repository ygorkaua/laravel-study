@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="/style/seriesIndex.css" />
@endsection

@section('page-title')
Lista de Séries
@endsection

@section('content')
@if (!empty($message))
<div class="sucess-message">
    {{$message}}
</div>
@endif

<div class="series-list">
    <div class="now-watching">
        <h2>Assistindo no momento</h2>
        <ul class="series-group">
            @foreach ($seriesWatching as $serie => $url)
            <a href="<?= $url ?>">
                <li class="series-item"><?= $serie; ?></li>
            </a>
            @endforeach
        </ul>
    </div>
    <div class="to-watch">
        <h2>Para assistir</h2>
        <ul class="series-group">
            @foreach ($seriesToWatch as $serie)
            <a href="/series/{{$serie->id}}">
                <li class="series-item">{{ $serie->name; }}</li>
            </a>
            @endforeach
        </ul>
    </div>
</div>
<a class="btn-add" href="/series/adicionar">Adicionar Série</a>
@endsection
