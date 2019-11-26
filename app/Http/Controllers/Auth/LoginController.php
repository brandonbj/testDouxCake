<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Redirect;


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



    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm(){
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials=$this->validate(request(),[
            'email'=>'email|required|string',
            'password'=>'required|string'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }else{
            return Redirect::back()->withInput()->withErrors(array('email'=>'correo o contraseña incorrecto, vuelva a intentarlo' , 'password' =>'correo o contraseña incorrecto, vuelva a intentarlo'));
        }
    }
    
    public function logout(Request $request){
        Auth::logout();
        return redirect()->to('/');
        
    }

}
