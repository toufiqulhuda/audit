<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $table = 'conversation';
    protected $primaryKey = 'con_id'; 
    protected $fillable = [
        'issue_id','ques_id','branchid','comments','created_by','created_at','updated_at',
    ];
}
