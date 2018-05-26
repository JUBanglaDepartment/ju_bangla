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
        $lastId = Batches::all()->last()->id;
        $content = view('batch/create')->with(['batch'=>$lastId+1,'year'=>date("Y")]);
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
            'batch' => 'required',
            'year' => 'required|max:4'
        ]);

        $batch = Input::get('batch');
        $year = Input::get('year');
        $toDate = Input::get('to');
        $desc = Input::get('desc');

        $from = Carbon::parse($fromDate);
        $to = Carbon::parse($toDate);

        $semesterTitleDurationInMonths = $to->diffInMonths($from);
        $semesterTitle = ucfirst(strtolower($semesterTitle));
        $semesterYear = $from->year;


        $semester = new Batches();
        $semester->semester_code = $semesterTitle." - ".$semesterYear;
        $semester->semester_title = $semesterTitle." - ".$semesterYear;
        $semester->semester_desc = $desc;
        $semester->year = $semesterYear;
        $semester->duration_months = $semesterTitleDurationInMonths;
        $semester->start_month = $fromDate;
        $semester->end_month = $toDate;
        $semester->is_active = 0;
        $semester->save();


        $request->session()->flash('alert-success', 'Course was created Successfully!');
        return Redirect::to('semester/create');
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
