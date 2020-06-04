<?php


Route::get('/', 'Home\HomeController@index');

Route::namespace('Servicos')->group( function(){

    Route::get('/servico'       ,               'ServicoController@serviceHome');

    Route::get('/servico/{tipo}',               'ServicoController@index')->name('servicos');

    Route::post('/servico/buscar',              'ServicoController@buscarServico');

    Route::get('/pagina/{args}',                'ServicoController@pagCompany');

    Route::get('/reg'           ,               'ServicoController@regatarValor');

    Route::get('/empresa/{nome}',               'ServicoController@showCompany');


});

Route::namespace('Empresa')->group( function(){

    Route::get('/home'          ,               'EmpresaController@perfilCompany')->name('home')->middleware('auth');

    Route::post('/store'        ,               'EmpresaController@store');

});



// INICIO ROTA CRUD

Route::prefix('criar')->name('criar.')->group(function () {

    Route::resource('contato'       , 'CRUD\ContatoCrudController')->middleware('auth');



    Route::resource('servico', 'CRUD\ServicoCrudController')->middleware('auth');

});

//FIM ROTA CRUD

Route::post('/home/endereco', 'User\UserUpdateController@perfilUpdate')->middleware('auth');

Route::redirect('/empresa', '/servico', 301);


//Rotas de cadastro de telefone e perfil

Route::post('/home/armazenar/contato'  , 'Empresa\EmpresaController@insertContact')->middleware('auth');

Route::post('/home/armazenar/perfil'   , 'Empresa\EmpresaController@insertPerfil')->middleware('auth');

Route::get('home/cadastro/{args}'      , 'Empresa\EmpresaController@viewCadastro')->middleware('auth');

//fim de rota para cadastro de telefone e perfil


//inicio rota pagina empresa


//fim rota pagina empresa


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');


//Route::get('/home', 'HomeController@index');




//Route::get('/servico', 'Empresa\EmpresaController@insertService');

















