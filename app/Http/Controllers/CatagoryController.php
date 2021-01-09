<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Catagory;
use App\Navigation;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Auth\Guard;

class CatagoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function showCatForm(){
        //$branch = DB::table('branch')->get();
        $catAll = Catagory::all();
        $cat = DB::table('catagory')->where('parent_cat_id', null )
        							->select('catid','cat_name')
                                    ->get();
        $items = Navigation::tree();
        //dd($cat);
        return view('catagory')->with(compact('cat','catAll','items'));
		//return view('catagory');
	}

	public function setCatagory(request $request){
		//dd($request);
        $this->validator($request->all())->validate();
		$cat = $this->create($request->all());
        //$this->guard()->login($cat);
        return redirect()->back()->with("success"," Catagory create successfully !");
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'catType' => 'required|integer',
            //'parentCat' => 'integer',
            'nameCat' => 'required|string|max:255',
            
        ]);
    }

    protected function create(array $data)
    {
        if($data['catType']==2){
	        return Catagory::create([
	            //'catType' => $data['catType'],
	            'parent_cat_id' => $data['parentCat'],
	            'cat_name' => $data['nameCat'],
	            'created_by' => Auth::User()->user_id,
	        ]);
    	}else{
    		return Catagory::create([
	            //'catType' => $data['catType'],
	            'cat_name' => $data['nameCat'],
	            'created_by' => Auth::User()->user_id,
        	]);
    	}
        
    }
}
