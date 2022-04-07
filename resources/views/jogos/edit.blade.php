@extends('layouts.app')


@section('title', 'Atualizar')


@section('content')


<div class="container">
    <h1>Atualizar</h1>
    <hr>
    <form action="{{route('jogos-update', ['id' => $jogos->id ])}}" method="post">
        @csrf
        @method('PUT')
    <div class="row">
        <div class="form-group col">
            <label for="">Nome</label>
            <input type="text" name="nome" value="{{$jogos->nome}}"  class="form-control" id="">
        </div>
        <div class="form-group col">
            <label for="">Categoria</label>
            <input type="text" name="categoria" value="{{$jogos->categoria}}" required class="form-control" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="">Ano criação</label>
            <input type="number" maxlength="4" value="{{$jogos->ano_criacao}}" requried name="ano_criacao" class="form-control" id="">
        </div>
        <div class="form-group col">
            <label for="">Valor</label>
            <input type="text" name="valor" value="{{$jogos->valor}}" required class="form-control" id="">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <input type="submit" value="Atualizar" class="btn btn-success">
            <a href="{{ route('jogos-index') }}" class="btn btn-danger">Voltar</a>
        </div>
    </div>
    </form>

</div>

@endsection
