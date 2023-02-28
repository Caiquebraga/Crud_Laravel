@extends('layouts.app')
@section('title', 'Criacao')
@section('content')
    <table class="table">

        <div class="container">
            <h1>Criar um novo jogo</h1>
            <hr>
            <form action="{{route('Jogos.store')}}" method="POST">
                @csrf
                <div class="form-group mt-5">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite o Nome">
                    </div>
                </div>
                
                <div class="form-group mt-5">
                    <div>
                        <label for="categoria">Categoria:</label>
                        <input type="text" class="form-control" name="categoria" placeholder="Digite uma categoria">
                    </div>
                </div>
                
                <div class="form-group mt-5">
                    <div>
                        <label for="ano_criacao">Ano criacao Jogo:</label>
                        <input type="number" class="form-control" name="ano_criacao" placeholder="Ano criacao jogo">
                    </div>
                </div>
                <div class="form-group mt-5">
                    <div>
                        <label for="valor">Valor:</label>
                        <input type="text" class="form-control" name="valor" placeholder="Digite o valor do jogo">
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
