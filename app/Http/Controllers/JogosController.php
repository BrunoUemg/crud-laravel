<?php

namespace App\Http\Controllers;

use App\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();

        return view('jogos.index', ['jogos' => $jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }
    public function store(Request $request)
    {
        if($request->nome != null){
            Jogo::create($request->all());
            return redirect()->route('jogos-index')->with('msgOk', 'Cadastrado com sucesso');
        }else{
            return redirect()->route('jogos-index')->with('msgError', 'Preencha todos os campos');
        }
    }

    public function edit($id)
    {
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            return view('jogos.edit', ['jogos' => $jogos]);
        }else{
            return redirect()->route('jogos-index')->with('msgError', 'Jogo não existe');
        }

    }

    public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'ano_criacao' => $request->ano_criacao,
            'valor' => $request->valor,
        ];
        Jogo::where('id',$id)->update($data);
        return redirect()->route('jogos-index')->with('msgOk', 'Atualizado com sucesso');
    }
}
