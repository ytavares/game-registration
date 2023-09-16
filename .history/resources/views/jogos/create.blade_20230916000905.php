@extends('layouts.app')

@section('title', 'Criação')
@section('content')
    <div class="container">
        <h1>Crie um novo jogo</h1>
        <hr>
        <form action="" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" name="categoria" class="form-control" placeholder="Digite uma categoria para o jogo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input type="number" name="ano_criacao" class="form-control" placeholder="Ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="Valor">Valor:</label>
                    <input type="number" name="Valor" class="form-control" placeholder="Digite um Valor para o jogo...">
                </div>
            </div>
        </form>
    </div>
@endsection
