@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('atividade.store')}}">
        @csrf
        <div class="text-center bg-dark p-1" style="color: white; width: 100%">
            <h1 style="text-align: center">Cadastrar Atividade</h1>
        </div>
        <div class="row my-4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="nome">Nome da Atividade:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <label for="data">Data da Atividade:</label>
                <input class="form-control" type="date" name="data" id="data" value="">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class=" col-sm-2 my-2">
                <a class="btn btn-secondary" href="{{route('atividade.index')}}" style="width: 100%">Voltar</a>
            </div>
            <div class="text-center col-sm-2 my-2">
                <button class="btn btn-primary" type="submit" style="width: 100%">Cadastrar</button>
            </div>
            <div class="col-sm-4"></div>
        </div>

    </form>
@endsection
