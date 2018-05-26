<?php

namespace App\Http\Controllers;

use App\Models\Batches;
use App\Models\Course;
use App\Models\Semester;
use App\Models\SemesterCourseFaculty;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Hello There";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $lastId = Batches::all()->last()->id;
//        $content = view('batch/create')->with(['batch'=>$lastId+1,'year'=>date("Y")]);
//        return view('layouts/main_template')->with(['content'=>$content]);
        $content = view('batch/create');
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
            'batch_code' => 'required',
            'batch_title' => 'required|max:200',
            'year' => 'number|max:4'
        ]);

        $code = Input::get('batch_code');
        $title = Input::get('batch_title');
        $year = Input::get('batch_year');
        $desc = Input::get('desc');

        Batches::where('id', '>', 0)->update(['is_last_batch' => 0]);


        $batches = new Batches();
        $batches->batch_code = $code;
        $batches->batch_title = $title;
        $batches->year = $year;
        $batches->batch_desc = $desc;
        $batches->is_last_batch = 1;
        $batches->save();


        $request->session()->flash('alert-success', 'Course was created Successfully!');
        return Redirect::to('batch/create');
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
