<?php

namespace App\Http\Middleware;

use App\Models\RoleMenu;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!isset(Auth::user()->id))
        {
            return redirect()->intended('/');
        }

        $menus = DB::table('role_menu')
            ->select('menus.menu_title','menus.menu_url')
            ->join('menus', 'menus.id', '=', 'role_menu.menu_id')
            ->where('role_menu.role_id', '=', Auth::user()->role_id)
            ->where('role_menu.is_active', '=', 1)
            ->get();

        $roles = DB::table('roles')
            ->select('role_name')
            ->where('id', '=', Auth::user()->role_id)
            ->where('is_active', '=', 1)
            ->first();

        $_SESSION["menus"] = $menus;
        $_SESSION["roles"] = $roles;

//        echo "<pre/>";
//        print_r($_SESSION["menus"]);
//        die;

        return $next($request);
    }
}
