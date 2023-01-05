
        
        
        <?php $__env->startSection('conteudo'); ?>
            <div class="progresso">
                <div class="head" >
                    <h2>Status do Histórico</h2>
                </div>
                <ul class="list-unstyled etapas">
                    <li class="solicitado" <?php echo e($historico->status == 'Solicitado' ? 'style=background-color:rgb(8,224,8);' : ''); ?> >Solicitado</li>
                    <li class="pasta-encontrada" <?php echo e($historico->status == 'Pasta encontrada' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>Pasta encontrada</li>
                    <li class="pendencias-verificadas" <?php echo e($historico->status == 'Pendencias verificadas' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>Pendecias verificadas</li>
                    <li class="historico-em-confecção" <?php echo e($historico->status == 'Em confeccao' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>Histórico em confecção</li>
                    <li class="historico-pronto" <?php echo e($historico->status == 'Historico pronto' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>Histórico pronto</li>
                    <p></p>
                </ul>
            </div>
        <?php $__env->stopSection(); ?>
    
        
        
        
    
    

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bfggd\history-checkout\resources\views/status.blade.php ENDPATH**/ ?>