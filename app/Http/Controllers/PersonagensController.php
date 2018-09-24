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

class PersonagensController extends Controller
{
	//FUNÇÃO RESPONSÁVEL POR LISTAR OS PERSONAGENS AO LCICAR NO LINK personagens
	public function listar_personagens() {
		$personagens =  People::all();
        return view ('Personagens.personagens') -> with('people',$personagens);
		
	}

	//===============================INÍCIO DO BLOCO DE BUSCAS POR URL====================================
	public function listar_personagens_name() {
		$personagens =  People::orderBy('name')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
		
	}

	public function listar_personagens_height() {
		$personagens =  People::orderBy('id')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
		
	}

	public function listar_personagens_mass() {
		$personagens =  People::orderBy('mass')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
		
	}

	public function listar_personagens_hair_color() {
		$personagens =  People::orderBy('hair_color')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
	}

	public function listar_personagens_skin_color() {
		$personagens =  People::orderBy('skin_color')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
	}

	public function listar_personagens_eye_color() {
		$personagens =  People::orderBy('eye_color')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
	}

	public function listar_personagens_birth_year() {
		$personagens =  People::orderBy('birth_year')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
	}

	public function listar_personagens_gender() {
		$personagens =  People::orderBy('gender')->get();
        return view ('Personagens.personagens') -> with('people',$personagens);
	}

	public function lista_interativa(){
		$valor = Request::Input('buscar');
		$personagens = DB::select('select * from people where name like "%'.$valor.'%"');
		return view ('Personagens.personagens') -> with('people',$personagens);
	}
	//===============================FIM DO BLOCO DE BUSCAS POR URL====================================	

	//FUNÇÃO RESPONSÁVEL POR REDIRECIONAR PARA TELA DE ADICIONAR PERSONAGENS
	public function adicionar_personagens(){

		return view ('Personagens.personagensadd'); 
	}

	//FUNÇÃO RESPONSÁVEL POR SALVAR UM NOVO PERSONAGEM
	public function salvar_personagens(){

		People::create([

		'name' => Request::Input('Nome'),
		'height' => Request::Input ('Altura'),
		'mass' => Request::Input('Massa'),
		'hair_color' => Request::Input ('CorCabelo'),
		'skin_color' => Request::Input('CorPele'),
		'eye_color' => Request::Input('CorOlhos'),
		'birth_year' => Request::Input('Criacao'),
		'gender' => Request::Input('Genero'),
		'url' => Request::Input('Url')

		]);
		
		//People::create(Request::all());
		return redirect ('/api/people/');

	}
	//FUNÇÃO ONDE SERA ENCAMINHADO O PERSOGANEM PARA O FORMULÁRIO DE EDIÇÃO 
	public function editar_personagem_form($id){ //AO CLICAR NO BOTÃO É CAPTURADO A ID DO MESMO.
		$personagem = People::find($id);
		return view('Personagens.personagenseditar') -> with('p', $personagem);
	}

	//FUNÇÃO RESPO~SÁVEL PELA EDIÇÃO DE PERSONAGEM 
	public function editar_personagem($id){

	//ENCONTRA O PERSONAGEM E SOBREESCREVE OS DADOS PELOS NOVOS DADOS REPASSADOS
	$personagem = People::findOrFail($id);
		$personagem->name = Request::Input('Nome');
		$personagem->height = Request::Input ('Altura');
		$personagem->mass = Request::Input('Massa');
		$personagem->hair_color = Request::Input ('CorCabelo');
		$personagem->skin_color = Request::Input('CorPele');
		$personagem->eye_color = Request::Input('CorOlhos');
		$personagem->birth_year = Request::Input('Criacao');
		$personagem->gender = Request::Input('Genero');
		$personagem->url = Request::Input('Url');
	$personagem->save();
	return redirect ('/api/people/');

	}

	//ESTE MÉTODO É RESPONSÁVEL POR EXCLUIR O PERSONAGEM SELECIONADO
	public function excluir_personagem($id){
		$deletar = People::find($id);
		$deletar -> delete();
		return redirect ('/api/people/');
	}

	//ESTE MÉTODO É RESPONSÁVEL POR REALZIAR A BUSCA DE UM PERSONAGEM PELO NAVEGADOR
	public function mostrar_personagem(){
    		$id = Request::route('id');
            $mostrar = People::find($id);
                if(empty($mostrar)) {
                    return "Esse personagem não existe";
            }
    			return view('Personagens.personagenssozinhos')->with ('p',$mostrar);  
			}

}
    