<?php

namespace App\Http\Controllers;

use App\QuestionType;
use Illuminate\Http\Request;
use App\Http\Resources\Question\QuestionTypeResource;
use Symfony\Component\HttpFoundation\Response;


class QuestionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return QuestionTypeResource::collection(QuestionType::paginate(20));
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
        $questionType = $request->isMethod('put') ? QuestionType::findOrFail
    ($request->id):new QuestionType;

    $questionType->id = $request->input('id');
     $questionType->name = $request->input('name');
      $questionType->description = $request->input('description');
      if($questionType->save()){
return new QuestionTypeResource($questionType);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // dd($id);
        // return new QuestionTypeResource($id);

 $book = QuestionType::find($id);
      return new QuestionTypeResource($book);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionType $QuestionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionType $QuestionType)
    {
     

        $QuestionType->update($request->all());
        
     return response([
            'data' => new QuestionTypeResource($questionType)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionType  $questionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionType $QuestionType)
    {
       
  $QuestionType->delete();
        return new QuestionTypeResource($QuestionType);
    }
}
}