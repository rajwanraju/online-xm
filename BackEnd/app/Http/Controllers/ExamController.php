<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Resources\Exam\ExamCollection;
use App\Http\Resources\Exam\ExamResource;
use App\Http\Requests;
use App\Exam;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $articles = Exam::orderBy('created_at','desc')->paginate(5);
       //  return $articles;

        return ExamResource::collection(Exam::paginate(20));

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
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
  public function show(Exam $exam)
    {

       

        return new ExamResource($exam);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Exam $exam)
    {
       // return $request->all();

        $exam->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {  
       $exam->delete();

      return response()->json(null, 204);
    }
}
