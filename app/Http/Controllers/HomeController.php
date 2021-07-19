<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user=Auth::user();

        $users = DB::table('users')->get();

        $books = DB::table('books')->get();
       
        $userType=$user->userable_type;

        if($userType=="App\Models\SuperAdmin"){

            return view('admindashboard.index', compact('users','books'));
         
        }
        else{

            return view('home', compact('books'));

        }
        
    }
}
