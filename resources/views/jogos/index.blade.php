@extends('layouts.app')


@section('title', 'Listagem')


@section('content')

<div class="container mt-5">

    @if(session('msgError'))
    <div class="alert alert-danger">
        <p>{{session('msgError')}}</p>
    </div>
    @endif
    @if(session('msgOk'))
    <div class="alert alert-success">
        <p>{{session('msgOk')}}</p>
    </div>
    @endif

    <div class="row">
        <div class="col-sm-10 ">
            <h1>Listagem de jogos</h1>
        </div>
        <div class="col-sm-2 ">
            <a href="{{route('jogos-create')}}" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano</th>
                <th scope="col">Valor</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
            <tr>
                <th>{{$jogo->id}}</th>
                <th>{{$jogo->nome}}</th>
                <th>{{$jogo->categoria}}</th>
                <th>{{$jogo->ano_criacao}}</th>
                <th>R$ {{$jogo->valor}}</th>
                <th>
                    <a href="{{route('jogos-edit', ['id' => $jogo->id ])}}" class="btn btn-success">Visualizar</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{ $jogo->id }}">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluir{{ $jogo->id }}">
                        Excluir
                    </button>
                </th>

                <!-- Modal -->
                <div class="modal fade" id="editar{{ $jogo->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form action="{{route('jogos-update', ['id' => $jogo->id ])}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <label for="">Nome</label>
                                    <input type="text" value="{{ $jogo->nome }}" class="form-control" name="nome" id="">
                                    <label for="">Categoria</label>
                                    <input type="text" value="{{ $jogo->categoria }}" class="form-control" name="categoria" id="">
                                    <label for="">Ano criação</label>
                                    <input type="text" value="{{ $jogo->ano_criacao }}" class="form-control" name="ano_criacao" id="">
                                    <label for="">valor</label>
                                    <input type="text" value="{{ $jogo->valor }}" class="form-control" name="valor" id="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <input type="submit" class="btn btn-success" name="Salvar" value="Salvar" id="">
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="modal fade" id="excluir{{ $jogo->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Excluir</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form action="{{route('jogos-destroy', ['id' => $jogo->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <div class="alert alert-danger">
                                        <p>Deseja excluir {{ $jogo->nome }}?</p>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Não</button>
                                <input type="submit" class="btn btn-success" name="Salvar" value="Sim" id="">
                            </div>
                            </form>

                        </div>
                    </div>
                </div>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
