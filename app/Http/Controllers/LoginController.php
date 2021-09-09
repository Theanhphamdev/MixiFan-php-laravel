<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('user.login');
    }

    public function registerForm()
    {
        return view('user.register');
    }

    public function save(Request $request)
    {
        dd($request->all());
    }
    public function authLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->validate(
                [
                    'email' => [
                        "required",
                        "email",
//                        function($attribute, $value, $fail){
//                            if (!strpos($value, "@fpt.edu.vn")){
//                                $fail("$attribute phai la duoi fpt.edu.vn");
//                            }
//                        }
                    ],
                    'password' => "required"
                ],
                [
                    'email.required' => "hay nhap email",
                    'email.email' => "khong dung dinh dang email",
                    'password.required' => "hay nhap passwd"
                ]

            );
            return redirect()->route('admin.dash');
        }else {
            return redirect()->back();
        }
    }

    public function authLogout()
    {
        auth()->logout();
        return redirect(route('user.login'));
    }
}
