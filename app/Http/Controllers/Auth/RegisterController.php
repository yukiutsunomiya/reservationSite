<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

<<<<<<< HEAD
use Auth;

=======
>>>>>>> 829ad9acd21827fe0059d1b2ce520ccd81978a82
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
<<<<<<< HEAD

     /* 作成 
    protected $redirectTo = RouteServiceProvider::HOME;

    */

    protected function redirectTo()
    {
        if (Auth::guard('admin')->check()) {
            return 'admin/stores';
        }else{
            return 'auth/top';
        }
        
    }


=======
    protected $redirectTo = RouteServiceProvider::HOME;

>>>>>>> 829ad9acd21827fe0059d1b2ce520ccd81978a82
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('guest');
    }
    */
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'furigana' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'store_url' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'furigana' => $data['furigana'],
            'telephone' => $data['telephone'],
            //'zipCode' => $data['zipCode'],
            //'prefectures' => $data['prefectures'],
           // 'address' => $data['address'],
            'store_url' => $data['store_url'],
        ]);
    }
}