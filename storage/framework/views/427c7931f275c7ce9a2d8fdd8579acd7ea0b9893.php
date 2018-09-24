<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Olá <?php echo e(Auth::user()->name); ?>, aqui estão seus dados de cadastro!</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <!-- CRIADO TABELA ONDE É APRESENTADO OS DADOS DO USUÁRIO AUTENTICADO -->
                    <table class="table table-hover">
                            <tr>
                                <td><label><h4>Nome:</h4> </label> <?php echo e(Auth::user()->name); ?></td>
                            </tr>
                            <tr>
                                <td><label><h4>E-mail:</h4> </label> <?php echo e(Auth::user()->email); ?></td></tr> 
                            <tr>   
                                <td><label><h4>Senha Atual:</h4> </label> <?php echo e(Auth::user()->password); ?> * </td>
                             </tr>
                             <tr>   
                                <td><label><h4>Data de Cadastro:</h4> </label> <?php echo e(Auth::user()->created_at); ?> </td> 
                            </tr> 
                            <tr> 
                                 <!-- APENAS O USUÁRIO AppMasters PODE VER O LINK DE ADICIONAR USUÁRIOS -->
                                    <?php if(Auth::user()->email == 'AppMasters@am.com'): ?>
                                <td>                                                
                                    <a href="/api/userss/add"><button class="btn btn-success">Adicionar novo usuário</button></a>
                                    <a href="/api/users/<?php echo e(Auth::user()->id); ?>"><button class="btn btn-dark">Carregar dados em JSon</button></a>
                                     <a href="/listar"><button class="btn btn-primary"> Usuários Cadastrados</button></a> 
                                </td>
                            </tr>
                     <?php else: ?>
                     <tr>
                        <td>
                            <a href="/api/users/<?php echo e(Auth::user()->id); ?>"><button class="btn btn-dark">    Carregar dados em JSon</button></a>
                            <a href="/listar"><button class="btn btn-primary">Usuários Cadastrados</button></a> 
                        <td>
                    </tr>                          
                    <?php endif; ?>   
                     </table> 
                </div>
                </div>
                                     <!--INFORMADO AO USUÁRIO SOBRE A CRIPTOGRAFIA DE SENHA -->
                     *<?php echo e(Auth::user()->name); ?>, Por medidas de segurança, sua senha está criptografada. Desta maneira nem você mesmo pode visualizar :) <br>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>