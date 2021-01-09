<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
	protected $table = 'branch';
    protected $primaryKey = 'branchid'; 
    protected $fillable = [
        'branch_code','branch_name','branch_contact','branch_address','branch_email','SWIFT','created_by','created_at','updated_at',
    ];

}
