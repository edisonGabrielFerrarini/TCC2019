<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pessoa;

class Pessoal extends Controller
{
    private $nome;

    public function __construct(pessoa $nome)
    {
        $this->nome = $nome;

    }

    public function index()
    {
        $valor = $this->nome->find(2);

        dd($valor);
    }

    public function insert()
    {
        /*
        $this->nome->nome = 'Miguel';
        $this->nome->desc = 'programador';
        $insert = $this->nome->save();

        if ( $insert ) {
            return "exito";
        }else{
            return "falha";
        }

        */

        $valor = $this->nome->find(2)->update([
            'nome' => 'Marcio'
        ]);


    }

}
