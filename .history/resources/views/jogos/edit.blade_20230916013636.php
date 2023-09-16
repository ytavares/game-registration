@extends('layouts.app')

@section('title', 'Edição')
@section('content')
    <div class="container">
        <h1 class="mt-5">Editar jogo</h1>
        <hr>
        <form action="{{ route('jogos-update', ['id'=> $jogos->id ])}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" value="{{ $jogos->nome}}" placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" value="{{ $jogos->categoria}}" placeholder="Digite uma categoria para o jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" name="ano_criacao" class="form-control" value="{{ $jogos->ano_criacao}}" placeholder="Ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="Valor">Valor:</label>
                    <input type="number" name="valor" class="form-control" value="{{ $jogos->valor}}" placeholder="Digite um Valor para o jogo...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
@endsection
