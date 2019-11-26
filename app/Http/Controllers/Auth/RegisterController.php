<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use App\Models\Alcaldia;
use App\Models\Ciudad;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(){
        $alcaldias=Alcaldia::all();
        $ciudades=Ciudad::all();
        return view('auth.register',compact('alcaldias','ciudades'));
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
        'email' => 'required|email|max:255|unique:usuarios',
        'nickname' => 'required|max:255|unique:usuarios',
        'password' => 'required|min:8|confirmed',
        'nombre' => 'required|string|max:255',
        'app' => 'required|string|max:255',
        'apm' => 'required|string|max:255',
        'telefono' => 'required|string|max:12',
        'calle' => 'required|string|max:255',
        'num_int' => 'string|max:4',
        'num_ext' => 'required|string|max:4',
        'colonia' => 'required|string|max:255',
        'cp' => 'required|integer',
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
        return Usuario::create([
            'id_ciudad'=>$data['ciudad'],
            'id_alcaldia'=>$data['alcaldia'],
            'id_tipo_usuario'=>$data['tipo']=1,
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
            'aviso_privacidad' => $data['aviso_privacidad']=true
        ]);
    }
    
}