<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $courses = course::all() ;
        
        return view('cours.index',compact('courses')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $students = (new User())->where('type', 'student');
        $teachers = (new User())->where('type', 'teacher');


        if ($request->name)
            $students = $students->Where('name', $request->name);
        if ($request->nationalcode)
            $students = $students->Where('nationalcode', $request->nationalcode);
        if ($request->gender)
            $students = $students->Where('gender', $request->gender);


        $students  = $students->get();
        $teachers   = $teachers->get();

        return view('cours.create', compact('teachers', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $course =  Course::create([
            'title'=> $request->title ,
            'description'=>$request->description,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
        ]);

        $course = Course::find($course->id) ;
     
        $course->users()->attach( $request->students) ;
        return redirect()->route('indexcours') ;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id) ;

       return view('cours.show',compact('course')) ;
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
