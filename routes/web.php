<?php


Route::get('/', function () {
return view('welcome');
});

Auth::routes();
//USUÁRIOS AUTENTICADOS IRÃO DIRETO PARA HOME / NÃO AUTENTICADOS IRÃO PARA TELA DE LOGIN
Route::get('/home', 'HomeController@index')->name('home');

// ROTA ONDE SERÁ  DIRECIONADO A HOME PAGE / USUÁRIOS AUTENTICADOS IRÃO TER SEUS DADOS À MOSTRA
Route::get ('/dashboard', 'UserController@listar_dados'); 

// ROTA QUERETORNA DADOS EM JSON EXCETO SENHA
Route::get ('/api/users/{id}', 'UserController@json');

//ROTA PARA CADASTRO DE NOVO USUÁRIO - apartir do usuário AppMasters
Route::get('/api/userss/add', 'UserController@new_user');

//ROTA PARA CADASTRO DE NOVO USUÁRIO - apartir do usuário AppMasters
Route::post('/cadastro', 'UserController@create');

//ROTA PARA LISTAR USUÁRIOS CADASTRADOS
Route::get('/listar', 'UserController@list_user');

//ROTA PARA LISTAGEM DE PERSONAGENS STAR WARS
Route::get('/api/people/', 'PersonagensController@listar_personagens');

//ROTA PARA ADICIONAR PERSONAGEM STAR WARS
Route::get('/personagens/add', 'PersonagensController@adicionar_personagens');

//ROTA PARA SALVAR PERSONAGEM
Route::get('/personagens/add/salvar', 'PersonagensController@salvar_personagens');

//ROTA DE AÇÃO EXCLUIR PERSONAGEM
Route::get('/personagens/excluir/{id}','PersonagensController@excluir_personagem');

//ROTA DE BUSCA DE PERSONAGEM PELA URL
Route::get ('/api/people/{id}', 'PersonagensController@mostrar_personagem');

//ROTA DE PARA INICIAR EDIÇÃO DE PERSONAGENS
Route::get('/personagens/editar/{id}', 'PersonagensController@editar_personagem_form');

//ROTA PARA CONFIRAMR SAVE DO PERSONAGEM APÓS EDIÇÃO
Route::get ('/personagens/editarr/{id}','PersonagensController@editar_personagem');

//REDIRECIONA DIRETO PRA FUNÇÃO QUE SALVA OS DADOS DOS PERSONAGENS SWAPI NO BANCO E MOSTRA A LISTA A TUALIZADA
// OS DADOS SÃO ADICIONADOS DE 20 EM 20, POR MOTIVOS DE DESEMPENHO DO SERVIDOR APACHE
//listar_bloco1
//listar_bloco2
//listar_bloco3
//listar_bloco4
//listar_bloco5
Route::get('/adicionar/swapi','SwapController@listar_bloco5');

//ROTA PARA ORGANIZAR DADOS PELA URL
//----------------------------------------------------------------
Route::get('/api/ppeople/order={name}', 'PersonagensController@listar_personagens_name');
Route::get('/api/ppeople/order=height', 'PersonagensController@listar_personagens_height');
Route::get('/api/ppeople/order=mass', 'PersonagensController@listar_personagens_mass');
Route::get('/api/ppeople/order=hair_color', 'PersonagensController@listar_personagens_hair_color');
Route::get('/api/ppeople/order=skin_color', 'PersonagensController@listar_personagens_skin_color');
Route::get('/api/ppeople/order=eye_color', 'PersonagensController@listar_personagens_eye_color');
Route::get('/api/ppeople/order=birth_year', 'PersonagensController@listar_personagens_birth_year');
Route::get('/api/ppeople/order=gender', 'PersonagensController@listar_personagens_gender');
//----------------------------------------------------------------

//ROTA PARA REALIZAR A BUSCA INTERATIVA 
Route::get('/api/search/people/', 'PersonagensController@lista_interativa');

