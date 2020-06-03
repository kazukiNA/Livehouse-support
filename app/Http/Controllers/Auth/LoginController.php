<?php

namespace OurLive\Http\Controllers\Auth;

use OurLive\Http\Controllers\Controller;
use OurLive\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use OurLive\User;
use Illuminate\Support\Facades\Auth;

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

    public function redirectToTwitterProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleTwitterProviderCallback()
    {
        try{
            $user = Socialite::with("twitter")->user();
        }
        catch (\Exception $e){
            return redirect('/login')->with('oauth_error','ログインに失敗しました');
        }
        
        $myinfo = User::firstOrCreate(['token' => $user->token],['name' => $user->name ,'email' => $user->getEmail()]);
        Auth::login($myinfo);
        return redirect()->to('/home');
    }
}
