<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table = 'catagory';
    protected $primaryKey = 'catid'; 
    protected $fillable = [
        'cat_name','parent_cat_id','isactive','created_by','created_at','updated_at',
    ];
}
