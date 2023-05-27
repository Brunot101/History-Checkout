@extends('layouts.main')
@section('title', 'perfil')
@section('menu')

<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            
            <li>
                <a href = "/login/perfil">Perfil
                <i class="bi bi-person"></i>
                </a>
            </li>
            <li>
                <a href="/login/cadastrar">Cadastrar Histórico
                <i class="bi bi-folder-plus"></i>
                </a>
            </li>
            <li>
                <a href="/login/solicitados">Históricos Solicitados
                <i class="bi bi-file-earmark-check" ></i>
                </a>
            </li>
            <li>
                
                <a href="/login">Verificar Histórico
                <i class="bi bi-search"></i>
                </a>
                
            </li>
            <li>
                <a href="/logout">Sair
                <i class="bi bi-box-arrow-left"></i>
                </a>
            </li>
                
    </div>
@endsection

@section('conteudo')
<div id = "perfil">
                
                <h2>Perfil </h2>
                <hr>
                <p style="text-align:center"><img src="images/semperfil.png" id="imagemperfil" ></p>
            </div>
            <form action="{{route('auth.atualizar')}}" method="post">
              @csrf
              @method('PUT')
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" value= "{{auth()->user()->name}}" name="name" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" class="form-control" id="nascimento" >
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control"  value= "{{auth()->user()->email}}" name="email" >
                  </div>
                  
                </div>
                
                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                      <label for="senha">Senha</label>
                      <input type="password" class="form-control" id="senha" value="{{auth()->user()->password}}" name="password">
                    </div>
                    
                    
                </div>
                <div class="form-row">
                  
                </div>
                
                <button type="submit" class="btn btn-primary" id="editbutton">Salvar</button>
              </form>
            
            </div>


@endsection
            