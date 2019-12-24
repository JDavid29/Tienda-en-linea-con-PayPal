<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

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

    //protected $redirectPath = '/';

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $usersocial = Socialite::driver('github')->user();

        $finduser = User::where('email',$usersocial->email)->first();
        if($finduser)
        {
            Auth::login($finduser);
            return redirect('/');
        }
        else{
            $user = new User();
            $user->name = $usersocial->name;
            $user->last_name = "apellido";
            $user->user = $usersocial->name;
            $user->type = "user";
            $user->active = 1;
            $user->address = "Avenida lo despechados";
            $user->email = $usersocial->email;
            $user->password = 123456;
            $user->save();
            Auth::login($user);
            return redirect('/');
        }
    }
}
