<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class LoginController extends Controller
{

    public function auth(Request $request){

        $this->validate($request,[
            'email' => ['required', 'email'],
            'password' => ['required'],

        ],[
            'email.required' => 'O campo email é obrigatorio',
            'password.required' => 'O campo senha é obrigatorio'
        ]
    );
        $credentials = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($credentials)){
            return redirect()->intended('login');
        }
        else{
            return redirect()->back()->with('invalido','Login invalido');
        }
    }

    

    public function cadastrar1(){
        return view('auth.cadastrar1');

    }
    public function perfil(){
        return view('auth.perfil');
    }
    public function login(){
        
        return view('auth.login');
        
        

    }

    public function criar(Request $request){
        
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('home');
        

       
        
    }

    public function cadastrar_historico(Request $request){
       
        $table = new Historico;

        $this->validate($request,[
            'aluno' => ['required'],
            'cpf' => ['required'],

        ],[
            'aluno.required' => 'O campo aluno é obrigatorio',
            'cpf.required' => 'O campo cpf é obrigatorio'
        ]
    );
    
        
        $table->aluno = $request->aluno;
        $table->cpf = $request->cpf;
        $table->nascimento = $request->nascimento;
        $table->pai = $request->pai;
        $table->mae = $request->mae;
        $table->observacoes = $request->observacoes;
        $table->status = $request->status;
        $table->save();

        return redirect()->route('auth.cadastrar_historico');
        

       
        
    }
    public function atualizar(Request $request){

        
        // User::findOrFail(auth()->user()->id)->update($request->all());
        // User::findOrFail(auth()->user()->id)->update($request->password);
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $aux = $request->password;
        $user->email = $request->email;
        if($aux != $user ->password){

            $user->password = bcrypt($request->password);
            $user->save();
        }
        else{
            $user->save();
        }
        

        
        

        return redirect('/login/perfil');

    }
    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return view('welcome');
    }
    public function solicitados(){

        $historicos = Historico::all();
        return view('auth.solicitados',['historicos'=>$historicos]);
    }

    public function cadastrar(){

        return view('auth.cadastrar');
    }

    public function modal_view($id){
        $historico = Historico::findOrFail($id);
        

        return view('auth.edit',['historico'=>$historico]);

    }

    public function editar_historico($id, Request $request){
        $historico = Historico::findOrFail($id);

        $historico->aluno = $request->aluno;
        $historico->nascimento = $request->nascimento;
        $historico->cpf = $request->cpf;
        $historico->pai = $request->pai;
        $historico->mae = $request->mae;
        $historico->observacoes = $request->observacoes;
        $historico->status = $request->status;
        $historico->save();



        return redirect('/login/solicitados');
    }

    public function deletar_historico($id){

        $historico = Historico::findOrFail($id);
        $historico->delete();
        return redirect('/login/solicitados');
    }

    public function status(Request $request, Exception $exception, Auth $auth){

      
    $this->validate($request,[
        'cpf' => ['required'],
        

    ],[
        'cpf.required' => 'Digite um cpf valido',
        
    ]
);
    $historico = Historico::where('cpf', $request->cpf)->first();
    
    if($historico == null){
       
        return back()->with('msg','Historico não encontrado');
        
    }
    else if(Auth::check()){
        return view('auth.loginq', ['historico'=>$historico]);
    }
    else{

        return view('status', ['historico'=>$historico]);
    }

    }
    
}
