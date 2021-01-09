<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\QuestionBank;
use App\Navigation;
use Illuminate\Support\Facades\DB;
class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showQuesForm(){
        //$ques = QuestionSet::all();
        $ques = DB::table('question_bank as qs')
                ->join('catagory as c','c.catid','=','qs.catid')
                ->join('users as u','u.user_id','=','qs.created_by')
                ->select('qs.ques_id','c.cat_name', 'qs.question','qs.isactive','u.username','qs.created_at')
                ->get();
        $cat = DB::table('catagory')->where('parent_cat_id', null )
        							->select('catid','cat_name')
                                    ->get();
        $items = Navigation::tree();
        //dd($cat);
        return view('question')->with(compact('cat','ques','items'));
		//return view('catagory');
	}

	public function setQuestion(request $request){
		//dd($request);
        $this->validator($request->all())->validate();
		$cat = $this->create($request->all());
        //$this->guard()->login($cat);
        return redirect()->back()->with("success"," Stored New Question successfully !");
	}

	protected function validator(array $data)
    {
        return Validator::make($data, [
            'catlist' => 'required|integer',
            'obj' => 'required|string|max:255',
            
            
        ]);
    }

    protected function create(array $data)
    {
        return QuestionBank::create([
	            'catid' => $data['catlist'],
	            'question' => $data['obj'],
	            'created_by' => Auth::User()->user_id,
	    ]);

        
    }
}
