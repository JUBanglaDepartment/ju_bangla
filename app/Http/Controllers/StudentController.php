<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use Symfony\Component\HttpFoundation\Session\Session;

class StudentController extends Controller
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
        //$lastBatch =
        $content = view('student/create');
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
            'regCode' => 'required|max:20',
            'stdCode' => 'required|max:20'
        ]);

        $users = User::where("username",Input::get('username'),"=")->first();

        if(isset($users->id)){
            $request->session()->flash('alert-danger', 'Username already exist!');
            return Redirect::to('student/create');
        }

        $user = new User;
        $user->username = Input::get('username');
        $user->password = bcrypt(Input::get('username'));
        $user->role_id = 3;
        $user->is_aactive = 1;
        $user->save();

        if($user->id == null)
        {
            $request->session()->flash('alert-danger', 'User could not created!');
            return Redirect::to('student/create');
        }


        $student = new Student;
        $student->user_id = $user->id;
        $student->batch_id = 0;
        $student->reg_code = Input::get('regCode');
        $student->student_code = Input::get('stdCode');
        $student->is_active = 1;
        $student->save();


        $request->session()->flash('alert-success', 'Student was created Successfully!');
        return Redirect::to('student/create');
    }

    public function test(Request $request)
    {
//        echo "Hello";
//        die;
        $users = User::orderBy('created_at', 'desc')->first();

        $lastID = $users->id;
        $created = 0;

        for($counter=1; $counter<=40; $counter++){
            $lastID++;
            $user = new User;
            $user->username = "s".$lastID;
            $user->password = bcrypt("s".$lastID);
            $user->role_id = 3;
            $user->is_aactive = 1;
            $user->save();

            if($user->id == null)
            {
                continue;
            }


            $student = new Student;
            $student->user_id = $user->id;
            $student->batch_id = 0;
            $student->reg_code = "TEST";
            $student->student_code = "TEST";
            $student->is_active = 1;
            $student->save();

            $created++;
            echo "Created Successfully >>> ".$user->username."<br/>";
        }
        echo "<br/><br/><b>".$created." Test Student Created Successfully</b>";
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
