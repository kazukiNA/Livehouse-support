<?php

namespace OurLive\Http\Controllers\Orner\Auth;


use OurLive\Http\Controllers\Controller;
use OurLive\Orner;
use OurLive\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    
    protected $redirectTo = 'orner/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    $this->middleware('guest:orner')->except('logout'); //ミドルウェアの変更
    }
    

    public function showLoginForm()
    {
        return view('orner.auth.login');
    }

    protected function guard()
    {
        return Auth::guard('orner');
    }

   

    public function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    return $this->loggedOut($request) ?: redirect('/orner/');  // ログアウト後のリダイレクト先
}
}
