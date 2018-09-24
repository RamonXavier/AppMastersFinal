@extends('layouts.app')

@section('content')
<!-- NESTA PÁGINA SÃO LISTADOS OS USUÁRIOS CADASTRADOS -->
<div class="card">
	 <div class="card-header"><h3>Usuários Cadastrados</h3></div>
	<table class="table table-hover">
		<tr>
			<th>Nome:</th>
			<th>Email:</th>
		</tr>
<?php foreach ($user as $u): ?> <!-- PARA CADA USUÁRIO ENCONTRADO APRESENTA SEU EMAIL E NOME-->
		<tr>
			<td>
				{{$u->name}}
			</td>	
			<td>
				{{$u->email}}
			</td>
		</tr>
	<?php endforeach ?>
</table>
	<div class="container-fluid">
			<a href="/dashboard"><button class="btn btn-secondary btn-md">Início</button></a>
	</div>
</div>

@endsection