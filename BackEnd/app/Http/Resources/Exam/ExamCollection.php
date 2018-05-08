<?php

namespace App\Http\Resources\Exam;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ExamCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
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
            'is_live' => $this->is_live

        ];
    }
}
