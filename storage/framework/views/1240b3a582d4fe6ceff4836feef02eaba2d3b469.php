<?php $__env->startSection('content'); ?>
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
				<?php echo e($u->name); ?>

			</td>	
			<td>
				<?php echo e($u->email); ?>

			</td>
		</tr>
	<?php endforeach ?>
</table>
	<div class="container-fluid">
			<a href="/dashboard"><button class="btn btn-secondary btn-md">Início</button></a>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>