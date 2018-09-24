@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Olá {{ Auth::user()->name }}, aqui estão seus dados de cadastro!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- CRIADO TABELA ONDE É APRESENTADO OS DADOS DO USUÁRIO AUTENTICADO -->
                    <table class="table table-hover">
                            <tr>
                                <td><label><h4>Nome:</h4> </label> {{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td><label><h4>E-mail:</h4> </label> {{ Auth::user()->email}}</td></tr> 
                            <tr>   
                                <td><label><h4>Senha Atual:</h4> </label> {{ Auth::user()->password}} * </td>
                             </tr>
                             <tr>   
                                <td><label><h4>Data de Cadastro:</h4> </label> {{ Auth::user()->created_at}} </td> 
                            </tr> 
                            <tr> 
                                 <!-- APENAS O USUÁRIO AppMasters PODE VER O LINK DE ADICIONAR USUÁRIOS -->
                                    @if (Auth::user()->email == 'AppMasters@am.com')
                                <td>                                                
                                    <a href="/api/userss/add"><button class="btn btn-success">Adicionar novo usuário</button></a>
                                    <a href="/api/users/{{Auth::user()->id}}"><button class="btn btn-dark">Carregar dados em JSon</button></a>
                                     <a href="/listar"><button class="btn btn-primary"> Usuários Cadastrados</button></a> 
                                </td>
                            </tr>
                     @else
                     <tr>
                        <td>
                            <a href="/api/users/{{Auth::user()->id}}"><button class="btn btn-dark">    Carregar dados em JSon</button></a>
                            <a href="/listar"><button class="btn btn-primary">Usuários Cadastrados</button></a> 
                        <td>
                    </tr>                          
                    @endif   
                     </table> 
                </div>
                </div>
                                     <!--INFORMADO AO USUÁRIO SOBRE A CRIPTOGRAFIA DE SENHA -->
                     *{{ Auth::user()->name }}, Por medidas de segurança, sua senha está criptografada. Desta maneira nem você mesmo pode visualizar :) <br>
            </div>
        </div>
    </div>
</div>
@endsection
