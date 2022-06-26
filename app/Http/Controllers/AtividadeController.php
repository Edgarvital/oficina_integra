<?php

namespace App\Http\Controllers;

use App\Atividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AtividadeController extends Controller
{
    public function index()
    {
        $atividades = Atividade::all();
        return view('atividade.index', compact('atividades'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('atividade.create', compact('user'));
    }

    public function store(Request $request)
    {
        $atividade = Atividade::create($request->all());
        $atividade->save();

        return redirect()->route('atividade.index');
    }

    public function show($id)
    {
        $atividade = Atividade::find($id);
        return view('atividade.show', compact('atividade'));
    }

    public function remove($id)
    {
        $atividade = Atividade::find($id);
        $atividade->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $atividade = Atividade::find($id);
        return view('atividade.edit', compact('atividade'));
    }

    public function update(Request $request)
    {
        $atividade = Atividade::find($request->id);
        $atividade->nome = $request->nome;
        $atividade->data = $request->data;
        $atividade->update();

        return redirect()->route('atividade.index');
    }
}
