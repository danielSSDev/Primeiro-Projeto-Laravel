<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!Permissao::where('nome', '=', 'usuario_listar')->count())
        {
            Permissao::create([
                'nome'=>'usuario_listar',
                'descricao'=>'Listar Usuarios'
            ]);
        }else
        {
            $permissao = Permissao::where('nome', '=', 'usuario_listar')->first();
            $permissao->update([
                'nome'=>'usuario_listar',
                'descricao'=>'Listar Usuarios'
            ]);
        }

        if(!Permissao::where('nome', '=', 'usuario_adicionar')->count())
        {
            Permissao::create([
                'nome'=>'usuario_adicionar',
                'descricao'=>'Adicionar Usuarios'
            ]);
        }else
        {
            $permissao = Permissao::where('nome', '=', 'usuario_adicionar')->first();
            $permissao->update([
                'nome'=>'usuario_adicionar',
                'descricao'=>'Adicionar Usuarios'
            ]);
        }

        if(!Permissao::where('nome', '=', 'usuario_editar')->count())
        {
            Permissao::create([
                'nome'=>'usuario_editar',
                'descricao'=>'Editar Usuarios'
            ]);
        }else
        {
            $permissao = Permissao::where('nome', '=', 'usuario_editar')->first();
            $permissao->update([
                'nome'=>'usuario_editar',
                'descricao'=>'Editar Usuarios'
            ]);
        }
    }
}
