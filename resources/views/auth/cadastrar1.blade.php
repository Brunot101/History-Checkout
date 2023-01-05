@extends('layouts.main')



@section("conteudo")


<form action="{{route('cadastrar.criar')}}" method="post">
@csrf
<i class="bi bi-person-fill"></i>
<input  type="text" name="name" placeholder= "Nome">         
    <br>
    <br>
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
</form>

@endsection