<form method="POST" action="{{route('atividade.store')}}">
    @csrf
    <div>
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <input type="hidden" name="status" value="Nao Realizada">

        <label for="nome">Nome da Atividade:</label>
        <input type="text" name="nome" id="nome" value="">
        <br>
        <label for="data">Data da Atividade:</label>
        <input type="date" name="data" id="data" value="">
    </div>
    <button type="submit">Cadastrar</button>
</form>
