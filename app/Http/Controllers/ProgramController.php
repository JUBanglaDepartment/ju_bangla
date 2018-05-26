<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class ProgramController extends Controller
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
        $content = view('program/create');
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
            'titleEn' => 'required|max:250',
            'titleBn' => 'required|max:250',
            'totalCredit' => 'required|numeric',
            'totalCourses' => 'required|numeric'
        ]);

        $program = new Program;
        $program->program_title_en = Input::get('titleEn');
        $program->program_title_bn = Input::get('titleBn');
        $program->program_desc = Input::get('desc');
        $program->total_credit = Input::get('totalCredit');
        $program->total_courses = Input::get('totalCourses');
        $program->estimated_semester = Input::get('totalSemester');
        $program->is_active = 1;
        $program->save();


        $request->session()->flash('alert-success', 'Program was created Successfully!');
        return Redirect::to('program/create');
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
