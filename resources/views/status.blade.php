@extends('welcome')
        
        
        @section('conteudo')
            <div class="progresso">
                <div class="head" >
                    <h2>Status do Histórico</h2>
                </div>
                <ul class="list-unstyled etapas">
                    <li class="solicitado" {{$historico->status == 'Solicitado' ? 'style=background-color:rgb(8,224,8);' : ''}} >Solicitado</li>
                    <li class="pasta-encontrada" {{$historico->status == 'Pasta encontrada' ? 'style=background-color:rgb(8,224,8);' : ''}}>Pasta encontrada</li>
                    <li class="pendencias-verificadas" {{$historico->status == 'Pendencias verificadas' ? 'style=background-color:rgb(8,224,8);' : ''}}>Pendecias verificadas</li>
                    <li class="historico-em-confecção" {{$historico->status == 'Em confeccao' ? 'style=background-color:rgb(8,224,8);' : ''}}>Histórico em confecção</li>
                    <li class="historico-pronto" {{$historico->status == 'Historico pronto' ? 'style=background-color:rgb(8,224,8);' : ''}}>Histórico pronto</li>
                    <p></p>
                </ul>
            </div>
        @endsection
    
        
        
        
    
    
