@extends('layouts.app')
@section('title', 'Editar')
@section('content')
    <table class="table">

        <div class="container">
            <h1>Editar um jogo</h1>
            <hr>
            <form action="{{route('Jogos.update', ['id'=>$jogos->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" value="{{$jogos->nome}}" placeholder="Digite o Nome">
                    </div>
                </div>
                
                <div class="form-group mt-5">
                    <div>
                        <label for="categoria">Categoria:</label>
                        <input type="text" class="form-control" name="categoria" value="{{$jogos->categoria}}" placeholder="Digite uma categoria">
                    </div>
                </div>
                
                <div class="form-group mt-5">
                    <div>
                        <label for="ano_criacao">Ano criacao Jogo:</label>
                        <input type="number" class="form-control" name="ano_criacao" value="{{$jogos->ano_criacao}}"placeholder="Ano criacao jogo">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div>
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" name="valor" value="{{$jogos->valor}}"placeholder="Digite o valor do jogo">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div>
                        <input type="submit"  name="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    @endsection
