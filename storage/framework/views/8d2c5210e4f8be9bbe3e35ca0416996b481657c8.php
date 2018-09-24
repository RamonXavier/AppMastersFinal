<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header">Cadastro de Novo Personagem</div>
		<div class="card-body">
			<div class="container">
				<div class="container-fluid">
					<form class="form-group " action="/personagens/editarr/<?php echo e($p->id); ?>'" method="get">
						<div>
							<div class="form-group row">
								<label for="name" class="form-label">Nome do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control "  type="text" name="Nome" value="<?php echo e($p->name); ?>" maxlength="50" required>
							</div>
						</div>
						<div>
							<div class="form-group row">
								<label for="name" class="form-label">Altura do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->height); ?>"  type="number" name="Altura" step="0.01" required>
							</div>
						</div>
						<div>
							<div class="form-group row">
								<label for="name" class="form-label">Peso do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->mass); ?>" type="number" name="Massa" step="0.01" required>
							</div>
						</div>
						<div>
							<div class="form-group row">
								<label for="name" class="form-label">Cabelo do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->hair_color); ?>" type="text" name="CorCabelo" required>
							</div>
							<div class="form-group row">
								<label for="name" class="form-label">Pele do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->skin_color); ?>" type="text" name="CorPele" required>
							</div>	
							<div class="form-group row">
								<label for="name" class="form-label">Olhos do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->eye_color); ?>" type="text" name="CorOlhos" required>
							</div>	
							<div class="form-group row">
								<label for="name" class="form-label">Criação do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->birth_year); ?>" type="text" name="Criacao" required>
							</div>	
							<div class="form-group row">
								<label for="name" class="form-label">Gênero do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->gender); ?>" type="text" name="Genero" required>
							</div>
							<div class="form-group row">
								<label for="name" class="form-label">Url do personagem:</label>
								<div class="input-group"></div>
								<input class="form-control " value="<?php echo e($p->url); ?>" type="text" name="Url" required>
							</div>																											
						</div>			
							<div class="container-fluid">
								<button type="submit" class="btn btn-secondary btn-lg btn-block">Salvar</button>
							</div>
					</form>
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
		</div>
</div>
<br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>