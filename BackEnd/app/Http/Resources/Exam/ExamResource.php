<?php

namespace App\Http\Resources\Exam;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
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
            'exam_id' => $this->exam_id,
            'instruction' => $this->instruction,
            'duration' => $this->duration,
             'start_date_time' => $this->start_date_time,
            'end_date_time' => $this->end_date_time,
            'is_live' => $this->is_live,
            'teacher_id' => $this->teacher_id,
            'course_id' => $this->course_id

        ];
    }
}
