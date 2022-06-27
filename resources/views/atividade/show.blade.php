@extends('layouts.app')
@section('content')
    <div class="text-center bg-dark p-1" style="color: white; width: 100%">
        <h1 style="text-align: center">Atividade - {{$atividade->nome}}</h1>
    </div>

    <p style="text-align: center">Data: {{$atividade->data}}, Status: {{$atividade->status}}</p>

    <a class="btn btn-secondary" style="margin-left: 49%" href="{{route('atividade.index')}}">Voltar</a>
@endsection
