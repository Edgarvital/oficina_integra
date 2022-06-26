<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    public function index($id)
    {
        $tarefas = Tarefa::where('atividade_id',$id)->get();
        $atividade = Atividade::find($id);
        return view('tarefa.index', compact('tarefas','atividade'));
    }

    public function create($id)
    {
        $atividade = Atividade::find($id);
        return view('tarefa.create', compact('atividade'));
    }

    public function store(Request $request)
    {
        $tarefa = Tarefa::create($request->all());
        $tarefa->save();

        return redirect()->route('tarefa.index',['id' => $tarefa->atividade->id]);
    }

    public function show($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefa.show', compact('tarefa'));
    }

    public function remove($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefa.edit', compact('tarefa'));
    }

    public function update(Request $request)
    {
        $tarefa = tarefa::find($request->id);
        $tarefa->nome = $request->nome;
        if(isset($request->flag_concluida)){
            $tarefa->flag_concluida = $request->flag_concluida;
        }else{
            $tarefa->flag_concluida = false;
        }

        $tarefa->update();

        return redirect()->route('tarefa.index',['id' => $tarefa->atividade->id]);
    }
}
