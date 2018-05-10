<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Http\Resources\Course\CourseResource;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return CourseResource::collection(Course::paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = $request->isMethod('put') ? Course::findOrFail
    ($request->id):new Course;

    $course->id = $request->input('id');
     $course->course_short_name = $request->input('course_short_name');
      $course->course_name = $request->input('course_name');
       $course->course_code = $request->input('course_code');
      if($course->save()){
return new CourseResource($course);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $Course )
    {
        

        return new CourseResource($Course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $Course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $Course)
    {
           
       $Course->update($request->only(['id','course_short_name', 'course_name', 'course_code']));

      return new CourseResource($Course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $Course)
    {
          $Course->delete();

      return response()->json(null, 204);
    }
}


