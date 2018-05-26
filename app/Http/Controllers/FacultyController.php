<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Semester;
use App\Models\SemesterCourseFaculty;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class FacultyController extends Controller
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
        $content = view('faculty/create');
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
            'username' => 'required|max:250',
            'code' => 'required|max:250'
        ]);


//        DB::transaction(function($request)
//        {
//            $user = new User;
//            $user->username = Input::get('username');
//            $user->password = bcrypt(Input::get('username'));
//            $user->role_id = 2;
//            $user->is_aactive = 1;
//            $user->save();
//
//            $faculty = new Faculty;
//            $faculty->user_id = $user->id;
//            $faculty->teacher_code = Input::get('code');
//            $faculty->is_active = 1;
//            $faculty->save();
//
//            if( !$faculty )
//            {
////                throw new \Exception('User not created for account');
//                $request->session()->flash('alert-success', 'Course creation failed!');
//                return Redirect::to('faculty/create');
//            }
//
//            $request->session()->flash('alert-success', 'Course was created Successfully!');
//            return Redirect::to('faculty/create');
//        });

        $user = new User;
        $user->username = Input::get('username');
        $user->password = bcrypt(Input::get('username'));
        $user->role_id = 2;
        $user->is_aactive = 1;
        $user->save();

        if($user->id == null)
        {
            die("User not created yet!");
        }


        $faculty = new Faculty;
        $faculty->user_id = $user->id;
        $faculty->teacher_code = Input::get('code');
        $faculty->is_active = 1;
        $faculty->save();


        $request->session()->flash('alert-success', 'Faculty was created Successfully!');
        return Redirect::to('faculty/create');
    }

    public function offeredCourses(Request $request)
    {
        $courses =  Course::all();
        $semester = Semester::find($this->offeredSemester());

        $content = view('faculty/course')->with(['courses'=>$courses,'semester'=>$semester]);
        return view('layouts/main_template')->with(['content'=>$content]);

    }

    public function assignOfferedCourses(Request $request)
    {
        $offeredSemester = $this->offeredSemester();

        // Need to make dynamic-----------
        $facultyId = 6;

        if(isset($_POST['all']))
        {
            $courses = Course::all();
            foreach($courses as $course)
            {
                $data = SemesterCourseFaculty::where('semester_id', '=', $offeredSemester)
                    ->where('course_id', '=', $course->id)
                    ->first(['id']);
                if(empty($data))
                {
                    $semisterCourse = new SemesterCourseFaculty;
                    $semisterCourse->semester_id = $offeredSemester;
                    $semisterCourse->course_id = $course->id;
                    $semisterCourse->faculty_id = $facultyId;
                    $semisterCourse->save();

                    $request->session()->flash('alert-success', 'Courses was assigned Successfully!');
                }
            }
        }
        elseif(isset($_POST['offered']))
        {
            foreach($_POST['offered'] as $course)
            {
                $data = SemesterCourseFaculty::where('semester_id', '=', $offeredSemester)
                    ->where('course_id', '=', $course)
                    ->first(['id']);

                if(empty($data))
                {
                    $semisterCourse = new SemesterCourseFaculty;
                    $semisterCourse->semester_id = $offeredSemester;
                    $semisterCourse->course_id = $course;
                    $semisterCourse->faculty_id = $facultyId;
                    $semisterCourse->save();

                    $request->session()->flash('alert-success', 'Courses was assigned Successfully!');
                }
            }
        }
        else
        {
            $request->session()->flash('alert-danger', 'No courses was selected');
        }

        return redirect('take-courses');
    }

    private function currentSemester()
    {
        $semester = Semester::where('start_month','<=',Carbon::now())
            ->where('is_active',1)->first();

        if(isset($semester->id))
        {
            return $semester->id;
        }
        return null;
    }

    private function offeredSemester()
    {
        $semester = Semester::where('start_month','>=',Carbon::now())
            ->where('is_active',0)->first();

        if(isset($semester->id))
        {
            return $semester->id;
        }
        return null;
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
