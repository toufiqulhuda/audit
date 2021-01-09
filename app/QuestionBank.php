<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    protected $table = 'question_bank';
    protected $primaryKey = 'ques_id'; 
    protected $fillable = [
        'catid','question','isactive','created_by','created_at','updated_at',
    ];
}
