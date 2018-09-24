<table class="table table-hover">
       <?php foreach ($dados_user as $p): ?>
            <tr>
                <td> <?php echo e($p->name); ?> </td>
                <td> <?php echo e($p->email); ?> </td>
                <td> <?php echo e($p->password); ?> </td>
            </tr> 
       <?php endforeach ?>
</table>  