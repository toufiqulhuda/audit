<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Navigation;

class IssueController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showIssueForm(){
    		$cat = DB::table('catagory')->select('catid','cat_name')->get();
    		$ques = DB::table('question_bank')->select('ques_id','question')->get();
            $branch = DB::table('branch')->select('branchid','branch_name')->get();
            $items = Navigation::tree();
    		return view('reportIssue')->with(compact('cat','ques','branch','items'));
    }
    public function getQuestionByCat(request $request){
      
        $ques = DB::table('question_bank')->where('catid','=',$request->input('id'))
                                          ->select('ques_id','question')->get();
        return response()->json(['msg'=> $ques]);
        //return view('reportIssue')->with('leads', json_decode($ques, true));
    }
	  public function reportIssue(request $request){
        $qc = $request->all('quesChecked')['quesChecked'];
        dd($qc);
        // $this->validator($request->all())->validate();
        // $issue = $this->create($request->all());
        // //$this->guard()->login($cat);
        // return redirect()->back()->with("success","  New Issue Created successfully !");
    }
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         //'branch_code' => 'required|integer|max:255|unique:branch',
    //         'branchname' => 'required|integer',
    //         'catagory' => 'required|integer',
    //         'followup' => 'required|integer',
    //         'lapses' => 'required|integer',
    //         'description' => 'required|string',
                        
    //     ]);
    // }

    // protected function create(array $data)
    // {
        
    //     return Branch::create([
    //         'branch_code' => $data['branch_code'],
    //         'branch_name' => $data['branchname'],
    //         'branch_email' => $data['email'],
			 //      'branch_contact' => $data['mobile'],
			 //      'branch_address' => $data['address'],
    //         'SWIFT' => $data['swift'],
    //         'created_by' => Auth::User()->user_id,
    //     ]);
    // }
}
