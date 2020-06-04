<?php

namespace App\Http\Controllers\CRUD;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\servico;

class ServicoCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('img')->store('upload');



        $request->validate([
            'tipo_servico'  =>  'required',
            'categoria'     =>  'required',
            'valor'         =>  'required',
            'desc'          =>  'required',
            '_token'        =>  'required',
            'img'           =>  'required',
          ]);
          $servico = new servico([
            'valor'                 => $request->get('valor'),
            'tipo_servico'          => $request->get('tipo_servico'),
            'categoria'             => $request->get('categoria'),
            'desc_servico'          => $request->get('desc'),
            'img_servico'           => "$path",
            'user_id'       => Auth()->user()->id

          ]);

          $update = $servico->save();
            if($update){
                return('correto');
            }else{
                return('erro');
            }

        return redirect('/criar/servico')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
