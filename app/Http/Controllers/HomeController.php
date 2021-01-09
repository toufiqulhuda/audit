<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Illuminate\Routing\Router;
//use Illuminate\Routing\Route;
//use Illuminate\Support\Facades\Route;
//use Illuminate\Routing\Controller;
use App\Navigation;
//use  App\Http\Controllers\NevigationController ;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected $layout = "layouts.app";

    /*protected $menu;
    public function __construct(NevigationController $menu)
    {
        $this->tree=$menu;
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items = Navigation::tree();
        
//dd($items);
        //$this->layout->content = View::make('layouts.sidebar')->withItems($items);
        return view('home')->withItems($items);

    }
    

    
}

