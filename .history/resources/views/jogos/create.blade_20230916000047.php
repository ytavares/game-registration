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
                    <input type="text" name="nome" placeholder="Digite um nome...">
                </div>
            </div>
        </form>
    </div>
@endsection
