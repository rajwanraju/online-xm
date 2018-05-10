<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    public function Exam_Question()
    {
        return $this->belongsTo('App\Exam_Question');
    }
}
