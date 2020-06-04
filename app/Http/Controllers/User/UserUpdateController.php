<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserUpdateController extends Controller
{
    public function profile()
    {

    }

    public function perfilUpdate(Request $request)
    {
        $date = $request->All();

        $update = auth()->user()->update($date);

        if($update){
            return redirect()
                        ->route('home')
                        ->with('success', 'Sucesso ao atualizar senha');
        }

        return redirect()
                    ->back()
                    ->with('error', 'erro ao atualizar senha');

    }

    public function perfilAleterarSenha(Request $request)
    {

        $date = $request->All();

        if($date['password'] != null){
            $date['password'] = bcrypt($date['password']);
        }else{
            unset($date['password']);
        }

        $update =  auth()->user()->update($date);

        if($update){
            return redirect()
                        ->route('home')
                        ->with('success', 'Sucesso ao atualizar senha');
        }

        return redirect()
                    ->back()
                    ->with('error', 'erro ao atualizar senha');


    }

}
