@extends('layouts.main')
@section('title', 'Home')
@section('menu')
<div class="loginIcons">
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('invalido'))
    <div class="alert alert-danger">
        {{session('invalido')}}
    </div>
    @endif
    <form action = "/login" method = "post">
    @csrf
    <i class="bi bi-person-fill"></i>
    <input  type="email" name="email" placeholder= "Email">         
    <br>
    <br>
    <i class="bi bi-lock-fill"></i>
    <input type="password" name="password"  placeholder="Senha">
    <br>
    <br>
    <button type="submit" id="submitlogin">Enviar</button>
    </form>
                                 
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
                    <button type="submit" id="submitCpf" >Enviar</button>
                </form>
                
            </div>
@endsection

