@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('atividade.update')}}">
    @csrf
    <div>
        <input type="hidden" name="id" value="{{$atividade->id}}">
        <label for="nome">Nome da Atividade:</label>
        <input type="text" name="nome" id="nome" value="{{$atividade->nome}}">
        <br>
        <label for="data">Data da Atividade:</label>
        <input type="date" name="data" id="data" value="{{$atividade->data}}">
    </div>
    <button type="submit">Alterar</button>
</form>
@endsection
