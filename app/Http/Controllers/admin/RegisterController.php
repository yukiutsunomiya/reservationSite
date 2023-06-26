<?php

namespace App\Http\Controllers\admin;           //修正

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Admin;                           //修正
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;            //追記

use Illuminate\Validation\Rules\Password;

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
    protected $redirectTo = '/admin';      //修正

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    protected function guard()                  //追記
    {                                           //追記
        return Auth::guard('admin');            //追記
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'furigana' => ['required', 'string', 'max:255'],
            'telephone' => ['required'],
            'prefectures' => ['required'],
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
        return Admin::create([                  //修正
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'furigana' => $data['furigana'],
            'telephone' => $data['telephone'],
            'zipCode' => $data['zipCode'],
            'prefectures' => $data['prefectures'],
            'address' => $data['address'],
        ]);
    }
}
