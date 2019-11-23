<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showLoginForm(){
        
        return view('auth.register');
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
            
            'ciudad'=>['required'],
            'alcaldia'=>['required'],
            'nombre' => ['required', 'string', 'max:255'],
            'app' => ['required', 'string', 'max:255'],
            'apm' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'nickname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'calle' => ['required', 'string', 'max:255'],
            'num_int' => ['required', 'string', 'max:255'],
            'num_ext' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'cp' => ['required', 'integer', 'max:5'],
            'aviso_privacidad' => ['required', 'boolean'],
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
            'id_ciudad'=>$data['ciudad'],
            'id_alcaldia'=>$data['alcaldia'],
            'nombre' => $data['nombre'],
            'app' => $data['app'],
            'apm' => $data['apm'],
            'telefono' => $data['telefono'],
            'nickname' => $data['nickname'],
            'password' => Hash::make($data['password']),
            'email' => $data['email'],
            'calle' => $data['calle'],
            'num_int' => $data['num_int'],
            'num_ext' => $data['num_ext'],
            'colonia' => $data['colonia'],
            'cp' => $data['cp'],
            'aviso_privacidad' => $data['aviso_privacidad'] ,
        ]);
    }
}
