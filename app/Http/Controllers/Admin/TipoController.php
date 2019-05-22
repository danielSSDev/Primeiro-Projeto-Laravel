<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo;

class TipoController extends Controller
{
    public function index()
    {
        $registros = Tipo::all();
        return view('admin.tipos.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Tipo();
        $registro->titulo = $dados['titulo'];

        $registro->save();

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $registro = Tipo::find($id);
            $dados = $request->all();
            $registro->titulo = $dados['titulo'];

            $registro->update($dados);

            \Session::flash('mensagem',['msg'=>'Registro Atualizado com sucesso!','class'=>'green white-text']);

        }catch(\Exception $e){
        \Session::flash('mensagem',['msg'=>'Erro ao salvar usuário: '.$e->getMessage(),'class'=>'red white-text']);
    }

        return redirect()->route('admin.tipos');
    }

    public function deletar($id)
    {
        Tipo::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.tipos');
    }
}








