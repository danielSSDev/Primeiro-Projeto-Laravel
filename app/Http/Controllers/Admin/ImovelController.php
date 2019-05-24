<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Tipo;
use App\Cidade;
use Illuminate\Support\Str;

class ImovelController extends Controller
{
    public function index()
    {
        $registros = Imovel::all();
        return view('admin.imoveis.index',compact('registros'));
    }

    public function adicionar()
    {
        $tipos = Tipo::all();
        $cidades = Cidade::all();
        return view('admin.imoveis.adicionar', compact('tipos', 'cidades'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        // para nao deixar o site poluido fazer dessa forma usando $auxData e passando todos os nomes dos campos no fillable e depois so criar ele em massa.
        $auxData = $dados;

        if(isset($auxData['mapa']) && trim($auxData['mapa']) != ""){
            $auxData['mapa'] = trim($auxData['mapa']);
        }else{
            $auxData['mapa'] = null;
        }

        $slug = Str::slug($dados['titulo'], '-');

        $file = $request->file('imagem');
        if($file){
            $rand = rand(11111,99999);
            $diretorio = "img/imoveis/".$slug."/";
            $ext = $file->guessClientExtension();
            $nomeArquivo = "_img_".$rand.".".$ext;
            $file->move($diretorio,$nomeArquivo);
            $auxData['imagem'] = $diretorio.'/'.$nomeArquivo;
        }else{
            $auxData['imagem'] = '';
        }

        Imovel::create($auxData);

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.imoveis');
    }

    public function editar($id)
    {
        $registro = Imovel::find($id);
        $tipos = Tipo::all();
        $cidades = Cidade::all();
        return view('admin.imoveis.editar', compact('registro','tipos', 'cidades'));
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $registro = Imovel::find($id);
            $dados = $request->all();
            $registro->titulo = $dados['titulo'];
            $registro->descricao = $dados['descricao'];
            $registro->status = $dados['status'];
            $registro->endereco = $dados['endereco'];
            $registro->cep = $dados['cep'];
            $registro->valor = $dados['valor'];
            $registro->dormitorios = $dados['dormitorios'];
            $registro->detalhes = $dados['detalhes'];
            $registro->publicar = $dados['publicar'];
            if(isset($dados['mapa']) && trim($dados['mapa']) != ""){
                $registro->mapa = trim($dados['mapa']);
            }else{
                $registro->mapa = null;
            }

            $registro->cidade_id = $dados['cidade_id'];
            $registro->tipo_id = $dados['tipo_id'];
            $slug = Str::slug($dados['titulo'], '-');

            $file = $request->file('imagem');
            if($file){
                $rand = rand(11111,99999);
                $diretorio = "img/imoveis/".$slug."/";
                $ext = $file->guessClientExtension();
                $nomeArquivo = "_img_".$rand.".".$ext;
                $file->move($diretorio,$nomeArquivo);
                $registro->imagem = $diretorio.'/'.$nomeArquivo;
            }

            $registro->save($dados);

            \Session::flash('mensagem',['msg'=>'Registro Atualizado com sucesso!','class'=>'green white-text']);

        }catch(\Exception $e){
            \Session::flash('mensagem',['msg'=>'Erro ao salvar usuário: '.$e->getMessage(),'class'=>'red white-text']);
        }

        return redirect()->route('admin.imoveis');
    }

    public function deletar($id)
    {
        Imovel::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.imoveis');
    }
}
