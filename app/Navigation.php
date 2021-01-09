<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = 'navigation';

    /*protected $fillable = [
        'menuid','menu_name','menu_url','menu_icon','parent_menu_id','roleid','isactive','created_by','created_at','updated_at',
    ];*/

    public function parent() {

        return $this->hasOne('App\Navigation', 'menuid', 'parent_menu_id');

    }

    public function children() {

        return $this->hasMany('App\Navigation', 'parent_menu_id', 'menuid');

    }  

    public static function tree() {

        return static::with(implode('.', array_fill(0, 4, 'children')))
        ->where('parent_menu_id', '=', NULL)
        ->get();

    }



}
