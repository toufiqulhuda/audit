<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Exception\handler;
use App\Navigation;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

/*
|--------------------------------------------------------------
| Login User Profile
|--------------------------------------------------------------
| Here the information of login user's
|
*/
	public function showUserProfile(){
        //$users = User::all()->where('user_id', Auth::user()->user_id)->first();
        $users = DB::table('users')->where('user_id',Auth::user()->user_id)->first();
        $items = Navigation::tree();
        return view('admin.userprofile')->with(compact('users','items'));
		//return view('admin.userprofile');
	}

/*
|--------------------------------------------------------------
| All user list
|--------------------------------------------------------------
| Here all user list of this system
|
*/
	public function showUserManagement(){
		//$users = User::all(); 
        $users = DB::table('users as u')
                ->join('users as ur','ur.user_id','=','u.created_by')
                ->join('roles as r','r.roleid','=','u.roleid')
                ->join('branch as br','br.branchid','=','u.branch_id')
                ->select('u.user_id','u.username', 'u.name','u.email','ur.username as created_by',
                    'r.role_name','br.branch_name','u.created_at','u.isactive')
                ->get(); 
        $items = Navigation::tree();
        //return $users ;
		return view('admin.manageuser')->with(compact('users','items'));
		
	}

/*
|--------------------------------------------------------------
| Active / In-Active user
|--------------------------------------------------------------
| Here admin can change user status Active / In-Active  
|
*/
    public function changeUserStatus(Request $request)
    {
        //return $request;
        $users = User::where('user_id', $request->user_id)
                        ->update(['isactive' => $request->status]);

        return redirect()->back()->with("success","Status successfully Update!");
    }
/*
|--------------------------------------------------------------
| Change login User Password
|--------------------------------------------------------------
| User can changed his own password
|
*/

    public function showChangePasswordForm(){
        $items = Navigation::tree();
        return view('auth.changepassword')->with(compact('items'));
    }

    public function changePassword(Request $request){
 
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("success","Password changed successfully !");
 
    }
/*
|--------------------------------------------------------------
| Change any User Password
|--------------------------------------------------------------
| Admin can changed any user's password
|
*/

    public function showResetPasswordForm(){
        $items = Navigation::tree();
        return view('admin.resetuserpassword')->with(compact('items'));
    }

    public function resetPassword(request $request){

        $resetPassword='123456';

        $users = User::where('username',$request->get('username'))->first();
        //return $users;
        $users->password = bcrypt($resetPassword);
        $users->save();
        return view('admin.resetuserpassword')->with("success","Password reset successfully !");
    }

    public function searchUser(request $request){
        //return $request;

        $users = User::where('username', $request->username)->first();
        if (empty($users)) {
            
            return redirect()->back()->with("error","User '".$request->username."' not found !");
        }else{
            
            return view('admin.resetuserpassword')->with(compact('users'));
        }

        
    }
    public function showUserRoleForm(){
        //$users = User::all(); 
        //$role = Role::all();
        //$role = DB::table('roles')
           $role = Role::join('users', 'users.user_id', '=', 'roles.created_by')
            ->select('roles.roleid', 'roles.role_name','users.username','roles.created_at')
            ->get();
            $items = Navigation::tree();
        //return $role;
        return view('admin.userrole')->with(compact('role','items'));
    }
    public function setUserRole(request $request){
        //return $request->rolename;
            try { 
                $Role = new Role;
                $Role->role_name  = $request->rolename;
                $Role->created_at = now();
                $Role->created_by = Auth::user()->user_id;
                $Role->save();
                return redirect()->back()->with("success","User role insert successfully !");
            } catch(QueryException $ex){ 
                dd($ex->getMessage()); 
            }
       // return view('admin.userrole');
    }

    // public function getBranchName(){
    //     $users = User::all();

    //     return view('layouts.header')->with(compact('users'));
    // }


}
