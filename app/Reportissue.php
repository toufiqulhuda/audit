<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportissue extends Model
{
    protected $table = 'reportissue';
    protected $primaryKey = 'issue_id'; 
    protected $fillable = [
        'catid','ques_id','branchid','follow_up','pages','sl_no','rectify','lapses','isactive',
        'created_by','created_at','updated_at',
    ];
}
