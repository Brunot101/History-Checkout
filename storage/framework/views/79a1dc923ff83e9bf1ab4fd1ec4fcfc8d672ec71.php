

<!-- Modal content -->
<div class="modal fade " id="delete-<?php echo e($historico->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            
          <h3  style="position: relative; top:10px" class="modal-title" id="exampleModalLabel"> 
            <i class="bi bi-trash-fill"></i>
            Tem certeza que deseja deletar o historico de <?php echo e($historico->aluno); ?>?</h3>
          
        </div>
        <div class="modal-body">
            
          
          <form action="<?php echo e(route('historico.deletar',$historico->id)); ?>" method="POST" id="form_delete">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            
              <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
              
              <button type="submit" class="btn btn-danger" >Deletar</button>
              
            
            
          </form>
        
    </div>
  </div> 
    
   <?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/delete.blade.php ENDPATH**/ ?>