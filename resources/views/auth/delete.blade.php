

<!-- Modal content -->
<div class="modal fade " id="delete-{{$historico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            
          <h3  style="position: relative; top:10px" class="modal-title" id="exampleModalLabel"> 
            <i class="bi bi-trash-fill"></i>
            Tem certeza que deseja deletar o historico de {{$historico->aluno}}?</h3>
          
        </div>
        <div class="modal-body">
            
          
          <form action="{{route('historico.deletar',$historico->id)}}" method="POST" id="form_delete">
            @csrf
            @method('DELETE')
            
              <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
              
              <button type="submit" class="btn btn-danger" >Deletar</button>
              
            
            
          </form>
        
    </div>
  </div> 
    
   