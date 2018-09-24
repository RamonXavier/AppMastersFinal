<?php $__env->startSection('content'); ?>


		<div class="card">
			<div class="card-header">Personagens Cadastrados</div>
				<div class="card-body">
					<div class="table-overflow">
						<?php if(!empty($people)): ?>
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
						<?php endif; ?>
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
						<?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 									
								<td>
									<?php echo e($p->id); ?>

								</td>
								<td>
									<?php echo e($p->name); ?>

								</td>
								<td>
									<?php echo e($p->height); ?>

								</td>
								<td>
									<?php echo e($p->mass); ?>

								</td>
								<td>
									<?php echo e($p->hair_color); ?>

								</td>
								<td>
									<?php echo e($p->skin_color); ?>

								</td>
								<td>
									<?php echo e($p->eye_color); ?>

								</td>
								<td>
									<?php echo e($p->birth_year); ?>

								</td>
								<td>
									<?php echo e($p->gender); ?>

								</td>
								<td>
									<h6><?php echo e($p->url); ?></h6>
								</td>
								<td>
									<a href="/personagens/editar/<?php echo e($p->id); ?>"><button class="btn btn-sm btn-success">Editar</button></a>
								</td>
								<td>
									<a href="/personagens/excluir/<?php echo e($p->id); ?>"><button class="btn btn-sm btn-danger">Excluir</button></a>
								</td>
								<td>
									<a href="/api/people/<?php echo e($p->id); ?>"><button class="btn btn-sm btn-warning">Ver Dados</button></a>
								</td>								
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>