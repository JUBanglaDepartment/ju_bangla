<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Semester;
use App\Models\SemesterCourse;
use App\Models\SemesterCourseFaculty;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class SemesterCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semester = Semester::all();
        $course = Course::all();

//        echo "<pre/>";
//        print_r($semester);
//        print_r($course);
//        die;

        $content = view('semester-course/create')->with(['semester'=>$semester,'course'=>$course]);
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
        echo "Hi";

//        $this->validate($request, [
//            'semester' => 'required|max:250',
//            'from' => 'required|date',
//            'to' => 'required|date'
//        ]);

//        $semesterId = Input::get('semester');
//        $courses = Input::get('courses');
//        $isAssign = Input::get('assign');
//
//        echo "<pre/>";
//        peinr_r($semesterId);
//        peinr_r($courses);
//        peinr_r($isAssign);
//        die;
//
//        $from = Carbon::parse($fromDate);
//        $to = Carbon::parse($toDate);
//
//        $semesterTitleDurationInMonths = $to->diffInMonths($from);
//        $semesterTitle = ucfirst(strtolower($semesterTitle));
//        $semesterYear = $from->year;
//
//
//        $semester = new Semester;
//        $semester->semester_code = $semesterTitle." - ".$semesterYear;
//        $semester->semester_title = $semesterTitle." - ".$semesterYear;
//        $semester->semester_desc = $desc;
//        $semester->year = $semesterYear;
//        $semester->duration_months = $semesterTitleDurationInMonths;
//        $semester->start_month = $fromDate;
//        $semester->end_month = $toDate;
//        $semester->is_active = 0;
//        $semester->save();
//
//
//        $request->session()->flash('alert-success', 'Course was created Successfully!');
//        return Redirect::to('semester/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = view('semester/create');
        return view('layouts/main_template')->with(['content'=>$content]);
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
