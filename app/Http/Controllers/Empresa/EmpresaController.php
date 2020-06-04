<?php

namespace App\Http\Controllers\Empresa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\contato;
use App\servico;

class EmpresaController extends Controller
{

    private $servico;
    private $contato;
    private $user;

    public function __construct(User $user, contato $contato, servico $servico)
    {

        $this->user     = $user;
        $this->contato  = $contato;
        $this->servico  = $servico;

        $this->middleware('auth');

    }


    public function perfilCompany()
    {

        if(!contato::where('user_id', auth()->user()->id)->exists()){
            return redirect('/home/cadastro/contato');
        }

        if(empty(auth()->user()->desc_empresa) || empty(auth()->user()->endereco)){
            return redirect('/home/cadastro/perfil');
        }


        return view('perfil.empresa');

    }




    public function viewCadastro($args)
    {
        if($args == 'contato'){
            if(!contato::where('user_id', auth()->user()->id)->exists()){
                return view('form_atualizacao.contato');
            }else{
                return redirect('/home');
            }
        }
        if($args == 'perfil'){
            return view('form_atualizacao.perfil');
        }else{
            redirect('/');
        }

    }



    public function insertContact(Request $request)
    {

        if(!contato::where('user_id', auth()->user()->id)->exists()){
            $request->validate([
                'whats'         =>  'required',
                'fixo'          =>  'required',
                'site'          =>  'required',
                'celular'       =>  'required',
                'email'         =>  'required',
                'facebook'      =>  'required',
                'twitter'       =>  'required',
                'instagram'     =>  'required'
              ]);
              $contato = new contato([
                'fixo'              => $request->get('fixo'),
                'celular'           => $request->get('whats'),
                'site'              => $request->get('site'),
                'whats'             => $request->get('whats'),
                'email'             => $request->get('email'),
                'facebook'          => $request->get('facebook'),
                'twitter'           => $request->get('twitter'),
                'instagram'         => $request->get('instagram'),
                'user_id'           => Auth()->user()->id
              ]);
              $save = $contato->save();

              if($save){
                  return redirect('/home');
              }else{
                  return "erro";
              }
        }
        return redirect('/home');
    }


    public function insertPerfil(Request $request)
    {
        $date = $request->All();
        if( (!auth()->user()->desc_empresa) || (!auth()->user()->endereco) ){
            $update = auth()->user()->update($date);
                if($update){
                    return redirect('/home')->with('success', 'Stock has been added');
                }else{
                    return "erro ao atualizar";
                }
        }else{
            redirect('/home');
        }
    }



    public function store(request $request)
    {

        $path = $request->file('image')->store('upload');

        $id = auth()->user()->id;

        $user = $this->user->where('id', Auth()->user()->id);
        $update = $user->update([
            'img' => "$path"
        ]);

        if( $update ){
            return redirect('/');
        }else{
            return "erro";
        }


    }

}
