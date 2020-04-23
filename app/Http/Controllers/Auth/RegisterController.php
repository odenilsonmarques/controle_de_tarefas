<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

//importando o Auth
use Illuminate\Support\Facades\Auth;

//importando o request
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    //rota (home) chamada quando for feito o cadastro de um usuario. Por padrao o laravel cria a rota acima, mas tava dando erro, logo resolvi usar a rota abaixo
    protected $redirectTo = '\home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('AdminTarefaViews.register');
    }

    public function register(Request $request){
        //recebendo os dados. Também é utilizado a funcão validator abaixo, configurado de acordo com o bd
        $data = $request->only([
        'name',
        'email',
        'password',
        'password_confirmation'
        ]);
        //validando os dados
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->route('register')
            ->withErrors($validator)
            ->withInput(); 
        }
        //se deu certo ocorre o processo de criação do usuário, usando a função create abaixo
        $user = $this->create($data);
        //se criou, é mandado logar no usuario
        Auth::login($user);
        return redirect()->route('home');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:200', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
