<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//importando o validator
use Illuminate\Support\Facades\Validator;
//importando o Auth
use Illuminate\Support\Facades\Auth;
//importando o request
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    //rota (home) chamada quando o usuario logar no sistema. por padrao o laravel criar a rota acima, mas tava dando erro, logo resolvi usar a rota abaixo
    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /*
    public function __construct(){
        $this->middleware('auth');
    }*/
    
     //esta função chama o view login(formulario de login de usuario)
     public function index(){
        return view('AdminTarefaViews.login');
    }
    public function authenticate(Request $request){
        //pegando os dados
        $data = $request->only([
            'email',
            'password'
        ]);
        //validando os dados
        $validator = $this ->validator($data);
        //passando o campo remember. Caso o mesmo não seja passado este vai ter como padrao o valor false
        $remember = $request->input('remember',false);

        //fazendo a verificação pra ver se teve algum erro
        if($validator->fails()){
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
        }
        //se deu certo, vai tentar fazer o processo de login
        // o remember ta sendo passado, pq está fazendo o uso do token para lembrar senha
        if(Auth::attempt($data,$remember)){
            return redirect()->route('home');
        }
        else{
            //adicionando um erro,Nesse se campo password estover errado é lancado a msg de erro
            $validator ->errors()->add('password','E-mail e/ou Senha Incorretos');
            return redirect()->route('login')
            ->withErrors($validator)
            ->WithInput();
        }
    }
    //criando validator para ser usado
    protected function validator(array $data){
        return validator::make($data,[
            'email'=>['required','string','email','max:200'],
            'password'=>['required','string','min:4'],
        ]);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
