<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Exception\handler;
use App\Branch;
use App\Navigation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
//use Illuminate\Contracts\Auth\Guard;


class BranchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBranchForm(){
        $branch = DB::table('branch')->get();
        $items = Navigation::tree();
        //$users = DB::table('users')->where('user_id',Auth::user()->user_id)->first();
        return view('admin.branch')->with(compact('branch','items'));
		//return view('admin.userprofile');
	}
	public function setBranch(request $request){
        //return $request;
        $this->validator($request->all())->validate();
		$user = $this->create($request->all());
        //$this->guard()->login($user);
        return redirect()->back()->with("success"," Branch create successfully !");
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'branch_code' => 'required|integer|max:255|unique:branch',
            'branchname' => 'required|string|max:255',
            'email' => 'string|email|max:255',
            'mobile' => 'required',
            'address' => 'required|string',
            'swift' => 'required|string',
            
        ]);
    }

    protected function create(array $data)
    {
        
        return Branch::create([
            'branch_code' => $data['branch_code'],
            'branch_name' => $data['branchname'],
            'branch_email' => $data['email'],
			'branch_contact' => $data['mobile'],
			'branch_address' => $data['address'],
            'SWIFT' => $data['swift'],
            'created_by' => Auth::User()->user_id,
        ]);
    }
}
