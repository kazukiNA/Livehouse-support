<?php

namespace OurLive\Http\Controllers\Orner\Auth;

use OurLive\Http\Controllers\Controller;
use OurLive\Orner;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/orner/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function showRegisterForm()
    {
        return view('orner.auth.register');  // 管理者用テンプレート
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:orners'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ruby' => ['required','string'],
            'phone_number' => ['required','string'],
            'city_address' => ['required','string'],
            
            //'birthday' => ['required','integer'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \OurLive\User
     */
    protected function create(array $data)
    {
        return Orner::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'ruby' => $data['ruby'],
            'phone_number' => $data['phone_number'],
            'address' => $data['city_address'],
            //'birthday' => $data['birthday'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function guard()
{
    return Auth::guard('orner'); //管理者認証のguardを指定
}

}
