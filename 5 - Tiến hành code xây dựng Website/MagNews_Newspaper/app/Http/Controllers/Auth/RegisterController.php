<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function getRegister()
    {
        return view('register');
    }
    
    function postRegister()
    {
        return view('register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data,
    //         [
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users',
    //             'password' => 'required|string|min:6|confirmed',
    //         ],
    //         [
    //             'name.required' => 'Họ và tên là trường bắt buộc',
    //             'name.max' => 'Họ và tên không quá 255 ký tự',
    //             'email.required' => 'Email là trường bắt buộc',
    //             'email.email' => 'Email không đúng định dạng',
    //             'email.max' => 'Email không quá 255 ký tự',
    //             'email.unique' => 'Email đã tồn tại',
    //             'password.required' => 'Mật khẩu là trường bắt buộc',
    //             'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    //             'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    //         ]
    //     );
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
