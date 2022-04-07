@extends('layouts.app')


@section('title', 'Cadastro')


@section('content')


<div class="container">
    <h1>Crie um novo jogo</h1>
    <hr>
    <form action="{{route('jogos-store')}}" method="post">
        @csrf
    <div class="row">
        <div class="form-group col">
            <label for="">Nome</label>
            <input type="text" name="nome"  class="form-control" id="">
        </div>
        <div class="form-group col">
            <label for="">Categoria</label>
            <input type="text" name="categoria" required class="form-control" id="">
        </div>
    </div>
    <div class="row">
        <div class="form-group col">
            <label for="">Ano criação</label>
            <input type="number" maxlength="4" requried name="ano_criacao" class="form-control" id="">
        </div>
        <div class="form-group col">
            <label for="">Valor</label>
            <input type="text" name="valor" required class="form-control" id="">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <a href="{{ route('jogos-index') }}" class="btn btn-danger">Voltar</a>
        </div>
    </div>
    </form>

</div>

@endsection
