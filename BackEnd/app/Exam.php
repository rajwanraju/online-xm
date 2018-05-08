<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Exam_Question;

class Exam extends Model
{
protected $fillable = [
		'exam_Id','instruction','duration','start_date_time','end_date_time','is_live','teacher_id','course_id'
	];

    //  public function Exam_Question()
    // {
    // 	return $this->hasMany(Exam_Question::class); 
    // }
}
