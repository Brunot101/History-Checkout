@extends('auth.login')

@section('conteudo')
            
            <div class="progresso">
                <div class="head" >
                    <h2>Status do Histórico</h2>
                </div>
                <div class="cline"></div>
                <ul class="list-unstyled etapas">
                    <li class="solicitado" data-toggle="tab" >
                        <span class="round-tab" id="Solicitado"  {{$historico->status == 'Solicitado' ? 'style=background-color:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-file-earmark"></i>
                            
                        </span>
                        <div class="legenda" {{$historico->status != 'Solicitado' ? 'style=display:none;' : ''}}>Solicitado</div>
            
                    </li>
                    <li class="pasta-encontrada" data-toggle="tab" >
                        <span class="round-tab" id= "Pasta encontrada" {{$historico->status == 'Pasta encontrada' ? 'style=background-color:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-file-earmark-check" ></i>
                        </span>
                        <div class="legenda" {{$historico->status != 'Pasta encontrada' ? 'style=display:none;' : ''}}>Pasta encontrada</div>
                    </li>
                    <li class="pendencias-verificadas" data-toggle="tab" >
                        <span class="round-tab" id= "Pendencias verificadas" {{$historico->status == 'Pendencias verificadas' ? 'style=background-color:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-search"></i>
                        </span>
                        <div class="legenda" {{$historico->status != 'Pendencias verificadas' ? 'style=display:none;' : ''}}>Pendências verificadas</div>
                    </li>
                    <li class="historico-em-confecção" data-toggle="tab" >
                        <span class="round-tab" id= "Em confeccao" {{$historico->status == 'Em confeccao' ? 'style=background-color:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-brush" ></i>
                        </span>
                        <div class="legenda" {{$historico->status != 'Em confeccao' ? 'style=display:none;' : ''}}>Em confecção</div>
                    </li>
                    <li class="historico-pronto" data-toggle="tab"  >
                        <span class="round-tab" id= "Historico pronto" {{$historico->status == 'Historico pronto' ? 'style=background:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="legenda" {{$historico->status != 'Historico pronto' ? 'style=display:none;' : ''}}>Histórico pronto</div>
                    </li>
                    <li class="historico-entregue" data-toggle="tab"  >
                        <span class="round-tab" id= "Historico entregue" {{$historico->status == 'Historico entregue' ? 'style=background-color:rgb(8,224,8);' : ''}}>
                            <i class="bi bi-envelope"></i>
                        </span>
                        <div class="legenda" {{$historico->status != 'Historico entregue' ? 'style=display:none;' : ''}}>Histórico entregue</div>
                    </li>
                    
                    
                </ul>

                @if($historico->status == 'Solicitado')

                <script>
                    
                    document.getElementById("Solicitado").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif

                @if($historico->status == 'Pasta encontrada')

                <script>
                    
                    document.getElementById("Pasta encontrada").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif

                @if($historico->status == 'Pendencias verificadas')

                <script>
                    
                    document.getElementById("Pendencias verificadas").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif
                
                @if($historico->status == 'Em confeccao')

                <script>
                    
                    document.getElementById("Em confeccao").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif

                @if($historico->status == 'Historico pronto')

                <script>
                    
                    document.getElementById("Historico pronto").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif

                @if($historico->status == 'Historico entregue')

                <script>
                    
                    document.getElementById("Historico entregue").style.animation = "flicksGreen 2s alternate infinite ease-in-out";
                </script>

                @endif

            </div>
            
            <button onclick="history.go(-1)" class="btn btn-primary" id="novaConsulta">Nova Consulta</button>
        @endsection
