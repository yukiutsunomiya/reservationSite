<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

<<<<<<< HEAD
use Illuminate\Http\Request;

=======
>>>>>>> 829ad9acd21827fe0059d1b2ce520ccd81978a82
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
<<<<<<< HEAD

    protected function loggedOut(Request $request)
    {
        return redirect('/auth/top'); // loginページの場合
    }
=======
>>>>>>> 829ad9acd21827fe0059d1b2ce520ccd81978a82
}
