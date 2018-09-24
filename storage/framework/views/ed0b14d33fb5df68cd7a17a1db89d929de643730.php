<?php $__env->startSection('content'); ?>
<!-- APENAS O USUÁRIO AppMasters POSSUI ACESSO AO CONTEÚDO DESTA PÁGINA -->
<?php if(Auth::user()->email == 'AppMasters@am.com'): ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><?php echo e(__('Registrar novo Usuário')); ?></div>

                <div class="card-body">
                    <form method="POST" action="/cadastro">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nome')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?><!--VALIDAÇÃO DE DADOS -->
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Endereço de E-Mail')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?><!--VALIDAÇÃO DE DADOS -->
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Senha')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?><!--VALIDAÇÃO DE DADOS -->
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label><!--VALIDAÇÃO DE DADOS -->

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary btn-lg">
                                    <?php echo e(__('Salvar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>     
        </div>
    </div>
</div>
<?php else: ?>
<!--CASO O USUÁRIO NÃO SEJA AppMasters, ELE NÃO POSSUI AUTORIZAÇÃO PARA CADASTRAR, ASSIM É APRESENTADO UMA MENSAGEM -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><?php echo e(__('Seu usuário não possui permissão para registrar!')); ?>

                <a href="/dashboard"><button class="btn btn-secondary">Voltar a Dashboard</button></a></div>
			</div>     
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>