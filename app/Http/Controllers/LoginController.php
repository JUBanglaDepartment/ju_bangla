<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPage()
    {
        if(Auth::check())
        {
            return redirect()->intended('/dash');
        }

        return view('user/loginPage');
    }

    public function loginAttempt(Request $request)
    {
        $auth = Auth::attempt([
              'username' => Input::get('username'),
              'password' => Input::get('password')
        ]);

        if($auth)
        {
            return redirect()->intended('/dash');
        }
        else{
            echo "Invalid Username or Password";
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/login');
    }
}
