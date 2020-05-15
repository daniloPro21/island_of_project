<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse;

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


    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return RedirectResponse
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $face = User::all()->where('email', '=', $user->getEmail())->first();

        if ($face){
            Auth::login($face, true);
            return redirect()->route('Acceuil');
        }else{
            $user = User::firstOrCreate([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(12345678)
            ]);
            Auth::login($user, true);
            return redirect()->route('Acceuil');
        }
    }

    public function facebookredirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookhandleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $find = User::all()->where('email', '=', $user->getEmail())->first();
        if ($find){
            Auth::login($find, true);
            return redirect()->route('Acceuil');
        }else{
            $user = User::firstOrCreate([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(12345678)
            ]);
            Auth::login($user, true);
            return redirect()->route('Acceuil');
        }
    }
}
