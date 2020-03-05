<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\ImgUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function Register(){
        $res=['token' => null,
            'status' => false,
        ];
        if (User::where('email', request('email'))->first() == null){

            $user = new User();
            $user->user_name = request('name');
            $user->password = bcrypt(request('password'));
            $user->email = request('email');
            $user->first_name = request('firstName');
            $user->last_name = request('lastName');
            if (request('birth_date') != null){
            $user->birth_date = request('birth_date');
            }else{
                $user->birth_date = "2012/1/2";
            }
            $user->location = request('country');
            $res['status'] = true;
            $user->save();
            $res['token'] = $user->createToken('app')->accessToken;
            $user->save();
            $img = new ImgUser();
            if (request('image') != 0) {
                $ext = explode('.', request('image'));
                $ext = $ext[count($ext) - 1];
                $now = time() . '.' . $ext;
                $img ->nameImg = $now;
                $res['status'] = true;
                move_uploaded_file(request('image'), './img/' . $now);

                $img->idUser = $user->id;
                $img->save();
            }else{
                $img->nameImg = 'default.png';
                $img->idUser = $user->id;
                $img->save();
            }
        }
        return $res;
    }

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        name of form input not column of database
        return Validator::make($data, [
            'firstname' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
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
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'user_name' => $data['username'],
            'location' => $data['location'],
            'birth_date' => $data['birth_date'],
            'about' => $data['about'],
            'facebook' => $data['facebook'],
            'linkedin' => $data['linkedin'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
