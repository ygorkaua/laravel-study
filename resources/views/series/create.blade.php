@extends('layout')

@section('css')
<link rel="stylesheet" type="text/css" href="/style/seriesCreate.css" />
@endsection

@section('page-title')
Adicionar uma Série
@endsection

@section('content')
<form method="post">
    @csrf
    <div class="form-add">
        <label for="name">Nome da Série</label>
        <input type="text" name="name" class="form-input">
        <label for="url">URL da série</label>
        <input type="text" name="url" class="form-input">
    </div>
    <button type="submit" class="form-btn">Adicionar</button>
</form>
@endsection
