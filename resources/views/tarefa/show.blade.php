@extends('layouts.app')
@section('content')
<h1 style="text-align: center">Tarefa - {{$tarefa->nome}}</h1>

<p style="text-align: center">Atividade: {{$tarefa->atividade->nome}},
    Status: @if($tarefa->flag_concluida) Concluida @else Não concluida @endif</p>

<a style="margin-left: 49%" href="{{route('tarefa.index', ['id' => $tarefa->atividade->id])}}">Voltar</a>
@endsection
