<?php

namespace App\Http\Controllers;

use App\Exam_Question;
use Illuminate\Http\Request;

class ExamQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
         $exam = $request->isMethod('put') ? Exam::findOrFail
    ($request->exam_id):new Exam;

    $exam->exam_id = $request->input('exam_id');
     $exam->instruction = $request->input('instruction');
      $exam->duration = $request->input('duration');
       $exam->start_date_time = $request->input('start_date_time');
     $exam->end_date_time = $request->input('end_date_time');
      $exam->is_live = $request->input('is_live');
      $exam->teacher_id = $request->input('teacher_id');
      $exam->course_id = $request->input('course_id');

      if($exam->save()){
return new ExamResource($exam);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exam_Question  $exam_Question
     * @return \Illuminate\Http\Response
     */
    public function show(Exam_Question $exam_Question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam_Question  $exam_Question
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam_Question $exam_Question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam_Question  $exam_Question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam_Question $exam_Question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam_Question  $exam_Question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam_Question $exam_Question)
    {
        //
    }
}
