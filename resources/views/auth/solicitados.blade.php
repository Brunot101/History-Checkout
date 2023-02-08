@extends('layouts.main')
@section('title', 'solicitados')
@section('menu')
  
  
          
            <div class="loginIcons">
                
                <nav class="navbar" id="nav" role="navigation">
                    <ul class="nav sidebar-nav">
                        
                        <li>
                            <a href="/login/perfil">Perfil</a>
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


          



          <div class="head-solicitados" style="text-align: center; padding-bottom: 30px;">

            <h2>Históricos Solicitados</h2>
            
            @include('auth.includes.messages')
          </div>
            <div class="search">
            <form action="{{route('queryHistory')}}" method="post">
            @csrf
              <i class="bi bi-search"></i>
              <input type="text" placeholder="Pesquisar" id="inputSearch" name="aluno">
              <button type="submit" class="btn btn-primary" id="searchButton" > Pesquisar</button>
            
              
            </div>
            </form>
            <table class="table table-hover" id="table1">
                
                <thead>
                  <tr>
                    <th scope="col">
                      
                    </th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Pai</th>
                    <th scope="col">Status</th>
                    <th scope="col"> Editar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($historicos as $historico)
                  <tr>
                    <th scope="row"></th>
                    
                    <td>{{$historico->aluno}}</td>
                    <td>{{$historico->cpf}}</td>
                    <td>{{$historico->pai}}</td>
                    <td>{{$historico->status}}</td>
                    <td><!-- Button trigger modal -->
                      <form >
                       
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-{{$historico->id}}"  >
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete-{{$historico->id}}"  >
                          <i class="bi bi-x-square"></i>
                        </button>

                      </form>
                      @include('auth.edit')
                      @include('auth.delete')
                      
                    </td>
                    
                      
                     
                  </tr>
                  @endforeach 
                  
                </tbody>
              </table>

              
               
        </div>

        
        <body>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          
        </body>
        
    
@endsection  
