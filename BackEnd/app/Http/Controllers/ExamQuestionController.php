<?php

namespace App\Http\Controllers;

use App\Exam_Question;
use Illuminate\Http\Request;
use App\Http\Resources\ExamQuestion\ExamQuestionResource;

class ExamQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExamQuestionResource::collection(Exam_Question::paginate(20));
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
         $question = $request->isMethod('put') ? Exam-Question::findOrFail
    ($request->id):new Exam_Question;

    $question->id = $request->input('id');
     $question->option_1 = $request->input('option_1');
     $question->option_2 = $request->input('option_2');
     $question->option_3 = $request->input('option_3');
     $question->option_4 = $request->input('option_4');
      $question->answer_1 = $request->input('answer_1');
      $question->answer_2 = $request->input('answer_2');
      $question->answer_3 = $request->input('answer_3');
      $question->answer_4 = $request->input('answer_4');
      $question->mark = $request->input('mark');
      $question->exam_id = $request->input('exam_id');

      if($question->save()){
return new ExamQuestionResource($question);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\question_Question  $question_Question
     * @return \Illuminate\Http\Response
     */
    public function show(Exam_Question $Exam_Question)
    {
        
        return new ExamQuestionResource($Exam_Question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question_Question  $question_Question
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam_Question $Exam_Question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question_Question  $question_Question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam_Question $Exam_Question)
    {
         //dd($Exam_Question);
       $Exam_Question->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question_Question  $question_Question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam_Question $Exam_Question)
    {
        $Exam_Question->delete();

      return response()->json(null, 204);
    }
}
