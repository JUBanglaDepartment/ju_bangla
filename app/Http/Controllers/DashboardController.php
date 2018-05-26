<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('web');
    }
    public function dashboard()
    {


//        if(!isset(Auth::user()->id))
//        {
//            return redirect()->intended('/');
//        }


//        $userId = Auth::user()->id;
//
////        echo $userId;
//
//        $userData = User::find($userId)->role->role_name;
//
//        echo "<pre/>";
//        print_r($userData);
//
//        die;
        return view('layouts/main_template');
    }
}