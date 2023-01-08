@extends('layouts.main')
@section('title', 'login')
@section('menu')


<div class="loginIcons">
                
    <nav class="navbar" id="nav" role="navigation">
        <ul class="nav sidebar-nav">
            
            
            <li>
                <a href = "login/perfil">Perfil</a>
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
<div class="head-content" style="text-align: center ;">
                
    <h2>Buscar Histórico</h2>
    @include('flash-message')


    @yield('content')
</div>


<div class="cpfForm">
    <form action="{{route('status')}}" method="POST">
    <label for="codigo" id="labelcod">Digite o CPF do aluno</label>
    <input type="text" id="cpf" placeholder="Ex: 123.456.789-00" name="cpf">
    
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-primary" id="submitCpf" >Enviar</button>
    </form>
    
</div>
@endsection

