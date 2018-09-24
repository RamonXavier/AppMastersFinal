@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header">Busca Individual do Personagem</div>
		<div class="card-body">
				<h1>Detalhes do personagem: {{$p->name}}</h1>
			<ul>
				<li>
					Nome: <strong>{{$p->name}}</strong>
				</li>
				<li>
					Altura do personagem: <strong>{{$p->height}}</strong>
				</li>
				<li>
					Peso do personagem: <strong>{{$p->mass}}</strong>
				</li>
				<li>
					Cabelo do personagem: <strong>{{$p->hair_color}}</strong>
				</li>
				<li>
					Pele do personagem: <strong>{{$p->skin_color}}</strong>
				</li>
				<li>
					Olhos do personagem: <strong>{{$p->eye_color}}</strong>
				</li>
				<li>
					Data de criação:<strong> {{$p->birth_year}}</strong>
				</li>
				<li>
					Gênero: <strong>{{$p->gender}}</strong>
				</li>
				<li>
					Útima atualização: <strong>{{$p->updated_at}}</strong>
				</li>
				<li>
					Cadastrado em: <strong>{{$p->created_at}}</strong>
				</li>
			</ul>
					<table>
						<tr>
							<td>
								<div class=" col-md-12 ">
									<a href="/dashboard"><button class="btn btn-primary  btn-lg btn-block">Início</button></a>
								</td>
								<td>
									<a href="/api/people/"><button class="btn btn-success  btn-lg btn-block">Listar Personagens</button></a>
								</div>
								</td>
						</tr>
					</table>
		</div>
	</div>
@endsection