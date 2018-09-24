<?php

// CONTROLLER RESPONSÁVEL PELAS FUNÇÕES DE PERSONAGENS
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\User;
use App\People;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class SwapController extends Controller
{

/* 
ESTAS FUNÇÕES SERÃO DIVIDIDAS EM BLOCOS POR LIMITAÇÃO DE DESEMPENHO DO APACHE SERVIDOR.
DESTA MANEIRA, PARA USAR, DEVE-SE ALTERAR A ROTA PADRÃO MUDANDO AS FUNÇÕES listar_bloco1,
listar_bloco2,listar_bloco...

JÁ FORAM EXECUTADAS TODAS AS FUNÇÕES, DESSA MANEIRA O USUÁRIO JÁ POSSUI TODOS OS PERSONAGENS CADASTRADOS EM SEU BANCO DE DADOS

O BOTÃO RESPONSÁVEL POR ESTA FUNÇÃO ESTÁ OCULTO NA TELA DE PERSONAGENS E DEVE SER USADO APENAS POR ADMINISTRADORES DO SISTEMA
*/

//FUNÇÃO POR CAPTURAR PERSONAGENS DA BIBLIOTECA SWAPI - COM EXCEÇÃO DO PERSONAGEM 17 POR NÃO EXISTIR.
public function listar_bloco1(){
	$id = 1;
	$num = 1;
	for ($id=1; $id <= 28; $id++) { 
	$url = 'https://swapi.co/api/people/'.$num.'/'; //NESTA LINHA É BUSCADO O PERSONAGEM 
	$json = file_get_contents($url); //RECUPERA OS DADOS DO PERSONAGEM EM JSON
	$obj = json_decode($json); //DECODIFICA OS DADOS DO PERSONAGEM PARA SE TORNAR UM OBJETO MANIPULADO
	$num = $num + 1;
	if ($num == 17) {
		$num = $num +1; //PERSONAGEM 17 INEXISTENTE
	}
		//CRIA OS PERSONAGENS DE ACORDO COM O OBJETO CRIADO ANTERIORMENTE	
		People::create([
		'name' => $obj->name,
		'height' => $obj->height,
		'mass' => $obj->mass,
		'hair_color' => $obj->hair_color,
		'skin_color' => $obj->skin_color,
		'eye_color' => $obj->eye_color,
		'birth_year' => $obj->birth_year,('Sem valor'),
		'gender' => $obj->gender,
		'url' => $obj->url

		]);
	}
	return redirect ('/api/people/');

}//O CICLO SE REPETE NOS DEMAIS BLOCOS, ADICIONANDO DE 20 EM 20 PERSONAGENS - COM EXCEÇÃO DO ULTIMO QUE SÃO 27

public function listar_bloco2(){
	$id = 1;
	$num = 21;
	for ($id=1; $id <= 20; $id++) { 
	$url = 'https://swapi.co/api/people/'.$num.'/';
	$json = file_get_contents($url);
	$obj = json_decode($json);
	$num = $num + 1;
	if ($num == 17) {
		$num = $num +1; //PERSONAGEM 17 INEXISTENTE
	}		
		People::create([
		'name' => $obj->name,
		'height' => $obj->height,
		'mass' => $obj->mass,
		'hair_color' => $obj->hair_color,
		'skin_color' => $obj->skin_color,
		'eye_color' => $obj->eye_color,
		'birth_year' => $obj->birth_year,('Sem valor'),
		'gender' => $obj->gender,
		'url' => $obj->url

		]);
	}
	return redirect ('/api/people/');
}

public function listar_bloco3(){
	$id = 1;
	$num = 41;
	for ($id=1; $id <= 20; $id++) { 
	$url = 'https://swapi.co/api/people/'.$num.'/';
	$json = file_get_contents($url);
	$obj = json_decode($json);
	$num = $num + 1;
	if ($num == 17) {
		$num = $num +1; //PERSONAGEM 17 INEXISTENTE
	}
		People::create([
		'name' => $obj->name,
		'height' => $obj->height,
		'mass' => $obj->mass,
		'hair_color' => $obj->hair_color,
		'skin_color' => $obj->skin_color,
		'eye_color' => $obj->eye_color,
		'birth_year' => $obj->birth_year,('Sem valor'),
		'gender' => $obj->gender,
		'url' => $obj->url

		]);
	}
	return redirect ('/api/people/');
}

public function listar_bloco4(){
	$id = 1;
	$num = 61;
	for ($id=1; $id <= 20; $id++) { 
	$url = 'https://swapi.co/api/people/'.$num.'/';
	$json = file_get_contents($url);
	$obj = json_decode($json);
	$num = $num + 1;
	if ($num == 17) {
		$num = $num +1; //PERSONAGEM 17 INEXISTENTE
	}
		People::create([
		'name' => $obj->name,
		'height' => $obj->height,
		'mass' => $obj->mass,
		'hair_color' => $obj->hair_color,
		'skin_color' => $obj->skin_color,
		'eye_color' => $obj->eye_color,
		'birth_year' => $obj->birth_year,('Sem valor'),
		'gender' => $obj->gender,
		'url' => $obj->url

		]);
	}
	return redirect ('/api/people/');
}

public function listar_bloco5(){
$tipo = 1;
	$id = 1;
	$num = 81;
	for ($id=1; $id <= 27; $id++) { 
	$url = 'https://swapi.co/api/people/'.$num.'/';
	$json = file_get_contents($url);
	$obj = json_decode($json);
	$num = $num + 1;
	if ($num == 17) {
		$num = $num +1; //PERSONAGEM 17 INEXISTENTE
	}
		People::create([
		'name' => $obj->name,
		'height' => $obj->height,
		'mass' => $obj->mass,
		'hair_color' => $obj->hair_color,
		'skin_color' => $obj->skin_color,
		'eye_color' => $obj->eye_color,
		'birth_year' => $obj->birth_year,('Sem valor'),
		'gender' => $obj->gender,
		'url' => $obj->url

		]);
	}
	return redirect ('/api/people/');
}		 
}

	
