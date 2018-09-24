<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header">Busca Individual do Personagem</div>
		<div class="card-body">
				<h1>Detalhes do personagem: <?php echo e($p->name); ?></h1>
			<ul>
				<li>
					Nome: <strong><?php echo e($p->name); ?></strong>
				</li>
				<li>
					Altura do personagem: <strong><?php echo e($p->height); ?></strong>
				</li>
				<li>
					Peso do personagem: <strong><?php echo e($p->mass); ?></strong>
				</li>
				<li>
					Cabelo do personagem: <strong><?php echo e($p->hair_color); ?></strong>
				</li>
				<li>
					Pele do personagem: <strong><?php echo e($p->skin_color); ?></strong>
				</li>
				<li>
					Olhos do personagem: <strong><?php echo e($p->eye_color); ?></strong>
				</li>
				<li>
					Data de criação:<strong> <?php echo e($p->birth_year); ?></strong>
				</li>
				<li>
					Gênero: <strong><?php echo e($p->gender); ?></strong>
				</li>
				<li>
					Útima atualização: <strong><?php echo e($p->updated_at); ?></strong>
				</li>
				<li>
					Cadastrado em: <strong><?php echo e($p->created_at); ?></strong>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>