<?php

namespace App\Http\Controllers\Servicos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\servico;
use App\contato;
use App\Models\TiposDeServico;
use App\User;

class ServicoController extends Controller
{

    private $servico;
    private $tipos_de_servico;
    private $contato;
    private $usuario;

    public function __construct(servico $servico, contato $contato, TiposDeServico $tipos_de_servico, User $usuario)
    {

        $this->servico = $servico;
        $this->tipos_de_servico = $tipos_de_servico;
        $this->contato = $contato;
        $this->usuario = $usuario;

    }

    public function pagCompany($args)
    {

        $usuario = $this->usuario->where('id', $args)->first();

        $servico = $this->servico->where('user_id', $usuario->id)->paginate(5);

        $contatos = $this->contato->where('user_id', $usuario->id)->first();


        return view('principal.pagina_empresa', compact('contatos', 'servico', 'usuario'));


    }


    public function serviceHome()
    {
        return view('principal.home');
    }


    public function index($servico)
    {

            $tipos_de_servico = $this->tipos_de_servico->where('tipo_servico', $servico)->first();

            if ($this->tipos_de_servico->where('tipo_servico', $servico)->first())
            {
                $registro = $this->servico->join('users', 'users.id', '=', 'servico.user_id')
                                          ->where('categoria', $servico)
                                          ->paginate(5);

                if(isset($registro)){
                    return view("servico.servico_prestados", compact('registro', 'tipos_de_servico'));
                }else{
                    return redirect('/');
                }


            }else {

                return redirect('/servico');

            }
    }

    public function showCompany($id)
    {

        if(is_numeric($id)){

            $registro = $this->servico->join('users', 'users.id', '=', 'servico.user_id')
                                      ->join('contato', 'contato.user_id', '=', 'users.id')
                                      ->where('id_servico', $id)->first();

            if($registro){

                return view('servico.servico', compact('registro'));

            }else {

                return redirect('/servico');

            }

        }else{
            return redirect('/servico');
        }
    }


    public function buscarServico(Request $request)
    {
        $registro = $this->servico::where('desc_servico', 'LIKE', "%$request->busca%")
                                    ->orWhere('tipo_servico', 'LIKE', "%$request->busca%")
                                    ->paginate(5);

        return view('servico.buscar_servico', compact('registro'));

    }




    public function teste()
    {
        /*
        $this->empresa->nome = 'Mecanica do bolinha';
        $this->empresa->servico = 'Mecanica';
        $this->empresa->descricao = 'Realizamos a manutenção de veiculos, preço em conta';
        $this->empresa->img = 'imagem aqui';
        $include = $this->empresa->save();

        if ($include) {
            return "correto";
        }else{
            return "erro ao inserir valor";
        }

        */


        $insert = $this->empresa->create([
            'nome'      => 'Solimões',
            'servico'   => 'Evento de cachaça e bota de coro',
            'descricao' => 'Evento de cachaça e bota de coro',
            'img'       => 'imagem'
        ]);

        if ($insert) {
            return "{$insert->nome} cadastrado com sucesso";
        }else{
            return "erro ao inserir valor";
        }


        //dd() debug do laravel


        /*
        $emp = $this->empresa->find(6);

        $emp->nome = 'Recapadora de pneus';

        $update = $emp->save();


        if( $update ){
            return 'atualização ocorreu com exito';
        }else{
            return 'Erro na alteração';
        }

        */


        /*
        $emp = $this->empresa->find(6);
        $update = $emp->update([
            'nome'      => 'Vidolin consertos',
            'servico'   => 'Conserto de moveis antigos',
            'descricao' => 'Conserto de moveis com exelencia e preço baixo',
            'img'       => 'imagem'
        ]);

        if( $update ){
            return 'atualização ocorreu com exito';
        }else{
            return 'Erro na alteração';
        }

        */


        /*
        $emp = $this->empresa->where('nome', 'Pães e bolos maria');
        $update = $emp->update([
            'nome'      => 'Santa Lucia',
            'servico'   => 'Pães e bolos',
            'descricao' => 'Entregamos Pães e bolos para toda região de campina',
            'img'       => 'imagem'
        ]);

        if( $update ){
            return 'atualização ocorreu com exito';
        }else{
            return 'Erro na alteração';
        }


        */

        /*
        $emp = $this->empresa->find(3);
        $delete = $emp->delete();

        if( $delete ){
            return 'Deletado com exito';
        }else{
            return 'Erro na alteração';
        }

        */


    }

    public function regatarValor()
    {
        $registro = $this->empresa::All();

        return view('teste.testeView', compact('registro'));
    }


}
