<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});*/


Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Change Password Controller
|--------------------------------------------------------------------------
|
| User can canage password
*/
Route::get('/changePassword','UserController@showChangePasswordForm');
Route::post('/changePassword','UserController@changePassword')->name('changePassword');
/*
|--------------------------------------------------------------------------
| Profile of login user
|--------------------------------------------------------------------------
|
| Here login user can see information
*/

Route::get('/profile','UserController@showUserProfile')->name('profile');


//Route::post('/changePassword','UserController@changePassword')->name('changePassword');
/*
|--------------------------------------------------------------------------
| User list
|--------------------------------------------------------------------------
|
| Here all user list of this system
*/
Route::get('/user-management','UserController@showUserManagement')->name('user-management');
Route::post('/changeStatus','UserController@changeUserStatus')->name('changeStatus');
/*
|--------------------------------------------------------------------------
| Reset user password
|--------------------------------------------------------------------------
|
| Here admin user can reset any user password.
*/
Route::get('/reset-user-password','UserController@showResetPasswordForm');
Route::post('/reset-user-password','UserController@resetPassword')->name('reset-user-password');
Route::post('/search-user','UserController@searchUser')->name('search-user');

Route::get('/user-role','UserController@showUserRoleForm');
Route::post('/user-role','UserController@setUserRole')->name('user-role');

Route::get('/add-branch','BranchController@showBranchForm');
Route::post('/add-branch','BranchController@setBranch')->name('add-branch');

Route::get('/add-catagory','CatagoryController@showCatForm');
Route::post('/add-catagory','CatagoryController@setCatagory')->name('add-catagory');

Route::get('/add-question','QuestionController@showQuesForm');
Route::post('/add-question','QuestionController@setQuestion')->name('add-question');

Route::get('/report-issue','IssueController@showIssueForm');
Route::post('/report-issue','IssueController@reportIssue')->name('report-issue');
Route::post('/getQuestionByCat','IssueController@getQuestionByCat')->name('getQuesByCat');
//Route::get('add-menu', 'HomeController@menu');
    