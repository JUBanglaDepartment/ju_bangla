<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = view('menu/create');
        return view('layouts/main_template')->with(['content'=>$content]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required|max:250',
            'url' => 'required|max:250'
        ]);

        $menu = new Menus();
        $menu->menu_title = Input::get('title');
        $menu->menu_url = Input::get('url');
        $menu->menu_desc = Input::get('desc');
        $menu->is_active = 1;
        $menu->save();


        $request->session()->flash('alert-success', 'Menu was created Successfully!');
        return Redirect::to('menu/create');
    }



    public function assign()
    {
        $menus = Menus::all();
        $roles = Role::all();
        $content = view('menu/assign')->with(['menus'=>$menus,'roles'=>$roles]);
        return view('layouts/main_template')->with(['content'=>$content]);
    }

    public function roleassign(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'url' => 'required|max:250'
        ]);

        $menu = new Menus();
        $menu->menu_title = Input::get('title');
        $menu->menu_url = Input::get('url');
        $menu->menu_desc = Input::get('desc');
        $menu->is_active = 1;
        $menu->save();


        $request->session()->flash('alert-success', 'Menu was created Successfully!');
        return Redirect::to('menu/create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
