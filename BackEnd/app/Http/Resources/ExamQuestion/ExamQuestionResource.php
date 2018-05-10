<?php

namespace App\Http\Resources\ExamQuestion;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamQuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'option_1' => $this->option_1,
            'option_2' => $this->option_2,
            'option_3' => $this->option_3,
            'option_4' => $this->option_4,
            'answer_1' => $this->answer_1,
            'answer_2' => $this->answer_2,
            'answer_3' => $this->answer_3,
            'answer_4' => $this->answer_4,
             'mark' => $this->mark,
            'exam_id' => $this->exam_id

        ];
    }
}
