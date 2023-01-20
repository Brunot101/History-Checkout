@extends('layouts.main')
@section('title', 'cadastrar')
@section('menu')

<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            <li>
                <a href = "/login/perfil">Perfil</a>
            </li>
            <li>
                <a href="/login/cadastrar">Cadastrar Histórico</a>
            </li>
            <li>
                <a href="/login/solicitados">Históricos Solicitados</a>
            </li>
            <li>
                <a href="/login">Verificar Histórico</a>
            </li>
            <li>
                <a href="/logout">Sair</a>
            </li>
                
    </div>
@endsection

@section('conteudo')
        <div id="conteudo">
          <div class="head-cadastrar" style="text-align: center;padding-bottom: 50px;" >
            <h2>Cadastrar Histórico</h2>
            @include('auth.includes.messages')
          </div>
            <form action="{{route('auth.cadastrar')}}" method="post">
              @csrf
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome do aluno" name="aluno">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" name="nascimento" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpfaluno"  placeholder="123.456.789-00" name="cpf">
                  </div>
                  
                </div>
                
                <div class="form-row">

                    <div class="form-group col-md-6">
                      <label for="inputFiliacao1">Pai</label>
                      <input type="text" class="form-control" id="inputFiliacao1" placeholder="Nome do pai" name="pai">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputFiliacao2">Mãe</label>
                      <input type="text" class="form-control" id="inputFiliacao2" placeholder="Nome da mãe" name="mae">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="observacao">Observações</label>
                      <input type="text" class="form-control"  placeholder="Informações adicionais" name="observacoes">
                    </div>
                    <div class="form-group col-md-6">
                      <fieldset>
                        <legend>Status</legend>
                        <div>
                          
                          <div>

                            <input type="radio"  id="status" value="Solicitado" name="status" checked >
                            <label for="status">Solicitado</label>
                          </div>
                          <div>
                            <input type="radio"  id="status" value="Pasta encontrada" name="status"  >
                            <label for="status">Pasta encontrada</label>
                          </div>
                          <div>
                            
                            <input type="radio"  id="Encontrada" value="Pasta encontrada" name="status" >
                            <label for="Pendencias verificadas">Pendencias verificadas</label>
                          </div>
                          <div>

                            <input type="radio"  id="Pendencias verificadas" value="Pendencias verificadas" name="status" >
                            <label for="Em confeccao">Em confecção</label>
                          </div>
                          <div>

                            <input type="radio"  id="pronto" value="Em confecção" name="status" >
                            <label for="Historico pronto">Histórico pronto</label>
                
                          </div>
                          <div>
                            <input type="radio"  id="entregue" value="Entregue" name="status" >
                            <label for="Historico pronto">Histórico entregue</label>
                          </div>
                          
                        </div>
                      </fieldset>
                    </div>
                    
                </div>
                
                
                <button type="submit" id="botao-cadastrar" class="btn btn-primary">Cadastrar</button>
              </form>
        </div>
        
        
    </div>
    @endsection
    
      

</html>