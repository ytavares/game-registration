@extends('layouts.app')

@section('title', 'Listagem')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Listagem de Jogos</h1>
            </div>
            <div class="col-md-6">
                <a href="{{ route('jogos-create')}}" class="btn btn-success">Criar novo jogo</a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de criação</th>
                <th scope="col">Valor</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($jogos as $jogo)
                <tr>
                    <th scope="row">{{ $jogo->id }}</th>
                    <td>{{ $jogo->nome }}</td>
                    <td>{{ $jogo->categoria }}</td>
                    <td>{{ $jogo->ano_criacao }}</td>
                    <td>{{ $jogo->valor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
