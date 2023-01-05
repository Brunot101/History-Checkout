

<!-- Modal content -->
<div class="modal " id="edit-{{$historico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Informações</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <form action="{{route('auth.editar_historico',$historico->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome do aluno" value="{{$historico->aluno}}" name="aluno"  >
              </div>
              <div class="form-group col-md-6">
                <label for="nascimento">Data de nascimento</label>
                <input type="date" class="form-control" id="nascimento" value="{{$historico->nascimento}}" name="nascimento">
              </div>
              <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpfaluno"  placeholder="123.456.789-00" value="{{$historico->cpf}}" name="cpf">
              </div>
              
            </div>
            
            <div class="form-row">
              
                <div class="form-group col-md-6">
                  <label for="inputFiliacao1">Pai</label>
                  <input type="text" class="form-control" id="inputFiliacao1" placeholder="Nome do pai" name="pai" value="{{$historico->pai}}" name="pai">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFiliacao2">Mãe</label>
                  <input type="text" class="form-control" id="inputFiliacao2" placeholder="Nome da mãe" name="mae" value="{{$historico->mae}}" name="mae">
                </div>
                <div class="form-group col-md-6">
                  <label for="observacao">Observações</label>
                  <input type="text" class="form-control"  placeholder="Informações adicionais" value="{{$historico->observacoes}}" name="observacoes">
                </div>
                <div class="form-group col-md-6">
                  <fieldset>
                    <legend>Status</legend>
                    <div>
                      
                      <div>

                        <input type="radio"  id="status" value="Solicitado" name="status" {{$historico->status == 'Solicitado' ? 'checked' :''}}>
                        <label for="status">Solicitado</label>
                      </div>
                      <div>
                        <div>

                          <input type="radio"  id="pasta encontrada" value="Pasta encontrada" name="status" {{$historico->status == 'Pasta encontrada' ? 'checked' :''}}  >
                          <label for="status">Pasta encontrada</label>
                        </div>
                        <div>
                        
                        <input type="radio"  id="Pendencias verificadas" value="Pendencias verificadas" name="status" {{$historico->status == 'Pendencias verificadas' ? 'checked' :''}} >
                        <label for="Pendencias verificadas">Pendencias verificadas</label>
                      </div>
                      <div>

                        <input type="radio"  id="Em confeccao" value="Em confeccao" name="status" {{$historico->status == 'Em confeccao' ? 'checked' :''}} >
                        <label for="Em confeccao">Em confecção</label>
                      </div>
                      <div>

                        <input type="radio"  id="pronto" value="Historico pronto" name="status" {{$historico->status == 'Historico pronto' ? 'checked' :''}} >
                        <label for="Historico pronto">Histórico pronto</label>
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
    
   