<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    //ESTA FUHNÇÃO É RESPONSÁVEL POR LISTAR OS DADOS DO USUÁRIO AO RELAIZAR O LOGIN
    public function listar_dados()
    {
        return view('home');
    }

    //ESTA FUHNÇÃO É RESPONSÁVEL POR REDIRECIONAR O SISTEMA PARA A PÁGINA DE CADASTRO DE NOVOS USUÁRIOS (QUANDO LOGADO COM AppMasters)
        public function new_user()
    {
        return view('user.add');
    }

    //ESTA FUHNÇÃO É RESPONSÁVEL POR APRESENTAR TODOS USUÁRIOS EM FORMATO JSON **EXCETO A SENHA
    public function json(){
    	$dados = User::All();
    	return $dados;
    } 

    	//ESTA FUHNÇÃO É RESPONSÁVEL CADASTRAR UM NOVO USUÁRIO NO BANCO DE DADOS CRIPTOGRAFANDO A SENHA
        protected function create()
    {
        User::create([
            'name' => Request::input('name'),
            'email' => Request::input('email'),
            'password' => Hash::make('password') // O CAMNDO HASH DEIXA A SENHA CRIPTOGRAFADA
        ]);
        return view('home');
    }

    	//ESTA FUNÇÃO É RESPONSÁVEL POR LISTAR OS USUÁRIOS A PARTIR DO BOTÃO ''USUÁRIOS CADASTRADOS
        public function List_user (){
            $user =  User::All();
            return view('user.list')->with('user',$user);
    }

}