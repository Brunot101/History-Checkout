

<!-- Modal content -->
<div class="modal fade" id="edit-<?php echo e($historico->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        
        <h3 class="modal-title" id="tituloEdit">Informações</h3>
        
        <div class="modal-body" >
          
          <form action="<?php echo e(route('auth.editar_historico',$historico->id)); ?>" method="POST" id="modalEdit">
            
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <br>
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome do aluno" value="<?php echo e($historico->aluno); ?>" name="aluno"  >
              </div>
              <div class="form-group col-md-6">
                <br>
                <label for="nascimento">Data de nascimento</label>
                <input type="date" class="form-control" id="nascimento" value="<?php echo e($historico->nascimento); ?>" name="nascimento">
              </div>
              <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpfaluno"  placeholder="123.456.789-00" value="<?php echo e($historico->cpf); ?>" name="cpf">
              </div>
              
            </div>
            
            <div class="form-row">
              
                <div class="form-group col-md-6">
                  <label for="inputFiliacao1">Pai</label>
                  <input type="text" class="form-control" id="inputFiliacao1" placeholder="Nome do pai" name="pai" value="<?php echo e($historico->pai); ?>" name="pai">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFiliacao2">Mãe</label>
                  <input type="text" class="form-control" id="inputFiliacao2" placeholder="Nome da mãe" name="mae" value="<?php echo e($historico->mae); ?>" name="mae">
                </div>
                <div class="form-group col-md-6">
                  <label for="observacao">Observações</label>
                  <input type="text" class="form-control"  placeholder="Informações adicionais" value="<?php echo e($historico->observacoes); ?>" name="observacoes">
                </div>
                <div class="form-group col-md-6">
                  <fieldset>
                    <legend>Status</legend>
                    <div>
                      
                      <div>

                        <input type="radio"  id="status" value="Solicitado" name="status" <?php echo e($historico->status == 'Solicitado' ? 'checked' :''); ?>>
                        <label for="status">Solicitado</label>
                      </div>
                      <div>
                        <div>

                          <input type="radio"  id="pasta encontrada" value="Pasta encontrada" name="status" <?php echo e($historico->status == 'Pasta encontrada' ? 'checked' :''); ?>  >
                          <label for="status">Pasta encontrada</label>
                        </div>
                        <div>
                        
                        <input type="radio"  id="Pendencias verificadas" value="Pendencias verificadas" name="status" <?php echo e($historico->status == 'Pendencias verificadas' ? 'checked' :''); ?> >
                        <label for="Pendencias verificadas">Pendencias verificadas</label>
                      </div>
                      <div>

                        <input type="radio"  id="Em confeccao" value="Em confeccao" name="status" <?php echo e($historico->status == 'Em confeccao' ? 'checked' :''); ?> >
                        <label for="Em confeccao">Em confecção</label>
                      </div>
                      <div>

                        <input type="radio"  id="pronto" value="Historico pronto" name="status" <?php echo e($historico->status == 'Historico pronto' ? 'checked' :''); ?> >
                        <label for="Historico pronto">Histórico pronto</label>
                      </div>
                      <div>
                            <input type="radio"  id="entregue" value="Historico entregue" name="status" <?php echo e($historico->status == 'Historico entregue' ? 'checked' :''); ?> >
                            <label for="Historico entregue">Histórico entregue</label>
                      </div>
                      
                    </div>
                  </fieldset>
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary">Salvar</button>
              
            
            
          </form>
        </div>
        
        </div>
      </div>
    </div>
  </div> 
    
   <?php /**PATH C:\Users\Betânia\History-Checkout\resources\views/auth/edit.blade.php ENDPATH**/ ?>