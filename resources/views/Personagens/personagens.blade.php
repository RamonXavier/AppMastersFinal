@extends('layouts.app')

@section('content')


		<div class="card">
			<div class="card-header">Personagens Cadastrados</div>
				<div class="card-body">
					<div class="table-overflow">
						@if (!empty($people))
					<form class="form" action="/api/search/people/">
							<table class="table">
								<tr>
									<th>
										<label for="buscar">Realizar busca Interativa:</label>
										<input class=" form-control-sm form-control-borderless" type="search" name="buscar" placeholder="Experimente: Hulk  :)">
										 <button class="btn btn-sm btn-success" type="submit">Buscar</button>
									</th>
								</tr>
							</table>
					</form>
						<table>
							<tr>
								<th>
									 <a href="/api/ppeople/order=name">- Ordenar por nome</a>
								</th>
								<th>
									<a href="/api/ppeople/order=height">- Ordenar por altura</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/api/ppeople/order=hair_color">- Ordenar por cor de cabelo</a>
								</th>
								<th>
									<a href="/api/ppeople/order=mass">- Ordenar por peso</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/api/ppeople/order=skin_color">- Ordenar por cor da pele</a>
								</th>
								<th>
									<a href="/api/ppeople/order=eye_color">- Ordenar por cor dos olhos</a>
								</th>
							</tr>
							<tr>
								<th>
									<a href="/api/ppeople/order=gender">- Ordenar por gênero</a>
								</th>
								<th>
									<a href="/api/ppeople/order=birth_year">- Ordenar por Ano de criação</a>
								</th>
							</tr>
						</table>
						@endif
							<table class="table table-hover table-responsive">
							<tr>
								<th>
									Cod
								</th>
								<th>
									Nome
								</th>
								<th>
									Altura
								</th>
								<th>
									Peso 
								</th>
								<th>
									Cabelo
								</th>
								<th>
									Pele
								</th>
								<th>
									 Olhos
								</th>
								<th>
									Criação
								</th>
								<th>
									Gênero
								</th>
								<th>
									Url
								</th>
							</tr>
							<tr>
						@foreach ($people as $p) 									
								<td>
									{{$p->id}}
								</td>
								<td>
									{{$p->name}}
								</td>
								<td>
									{{$p->height}}
								</td>
								<td>
									{{$p->mass}}
								</td>
								<td>
									{{$p->hair_color}}
								</td>
								<td>
									{{$p->skin_color}}
								</td>
								<td>
									{{$p->eye_color}}
								</td>
								<td>
									{{$p->birth_year}}
								</td>
								<td>
									{{$p->gender}}
								</td>
								<td>
									<h6>{{$p->url}}</h6>
								</td>
								<td>
									<a href="/personagens/editar/{{$p->id}}"><button class="btn btn-sm btn-success">Editar</button></a>
								</td>
								<td>
									<a href="/personagens/excluir/{{$p->id}}"><button class="btn btn-sm btn-danger">Excluir</button></a>
								</td>
								<td>
									<a href="/api/people/{{$p->id}}"><button class="btn btn-sm btn-warning">Ver Dados</button></a>
								</td>								
							</tr>
						@endforeach
					</table><br>
				</div>
			<div>		
				<a href="/personagens/add"><button class="btn btn-secondary btn-lg btn-block">Adicionar Novo Personagem</button></a>
			 </div><br>
			<div class="">
				<a href="/dashboard"><button class="btn btn-primary btn-center col-lg-2 btn-md btn-block">Início</button></a>
			</div>
		<!--<div class="container-fluid"> ESE BOTÃO É RESPONSÁVEL POR ADICIONAR TODOS OS DADOS
										  DA SWAPI NO BANCO DE DADOS / PARA USÁ-LO DEVE-SE MODIFICAR 
										  A ROTA REFERENTE DO 1 AO 5 UM POR VEZ. 
					<a href="/adicionar/swapi"><button  class="btn btn-hide btn-primary btn-center col-lg-2 btn-md btn-block">Buscar personagens</button></a>
			</div>
		-->
				</div>
			<br>
@endsection