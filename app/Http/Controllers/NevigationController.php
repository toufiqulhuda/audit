<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Nevigation;
class NevigationController extends Controller
{
    //

    public function parent() {

        return $this->hasOne('nevigation', 'menuid', 'parent_menu_id');

    }

    public function children() {

        return $this->hasMany('nevigation', 'parent_menu_id', 'menuid');

    }  

    public static function tree() {

        return static::with(implode('.', array_fill(0, 4, 'children')))->where('parent_menu_id', '=', NULL)->get();

    }
}
