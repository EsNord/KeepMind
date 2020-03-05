<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use http\Env\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{



    public function login(){
        $res = ['token' => null,
            'status' => false,
        ];

        $credentials = ['email' => request('email'),
            'password' => request('password')
        ];

        if (auth()->attempt($credentials)){
            $user = auth()->user();
            $res['token'] = $user->createToken('app')->accessToken;
            $res['status'] = true;
        }
        return $res;
    }

    public  function redirectToProvider($provider){


        return Socialite::driver($provider)->redirect();

    }

    public  function handleProviderCallback($provider){

        $user = Socialite::driver($provider)->user();
        dd($user);
    }
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
