
        
        
        <?php $__env->startSection('conteudo'); ?>
            <div class="progresso">
                <div class="head" >
                    <h2>Status do Histórico</h2>
                </div>
                <div class="cline"></div>
                <ul class="list-unstyled etapas">
                    <li class="solicitado" data-toggle="tab" >
                        <span class="round-tab"  <?php echo e($historico->status == 'Solicitado' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-file-earmark"></i>
                        </span>
                    </li>
                    <li class="pasta-encontrada" data-toggle="tab" >
                        <span class="round-tab" <?php echo e($historico->status == 'Pasta encontrada' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-file-earmark-check"></i>
                        </span>
                    </li>
                    <li class="pendencias-verificadas" data-toggle="tab" >
                        <span class="round-tab" <?php echo e($historico->status == 'Pendencias verificadas' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-search"></i>
                        </span>
                    </li>
                    <li class="historico-em-confecção" data-toggle="tab" >
                        <span class="round-tab" <?php echo e($historico->status == 'Em confeccao' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-brush" ></i>
                        </span>
                    </li>
                    <li class="historico-pronto" data-toggle="tab"  >
                        <span class="round-tab" <?php echo e($historico->status == 'Historico pronto' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-check2"></i>
                        </span>
                    </li>
                    <li class="historico-entregue" data-toggle="tab"  >
                        <span class="round-tab" <?php echo e($historico->status == 'Historico entregue' ? 'style=background-color:rgb(8,224,8);' : ''); ?>>
                            <i class="bi bi-envelope"></i>
                        </span>
                    </li>
                    
                    
                </ul>
            </div>
        <?php $__env->stopSection(); ?>
    
        
        
        
    
    

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\bfggd\here\History-Checkout\resources\views/status.blade.php ENDPATH**/ ?>