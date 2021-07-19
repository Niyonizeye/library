<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;

use App\Models\User;

use App\Models\Book;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function addbook(){

        return view('admindashboard.addbook');
    }

    public function newLibrian(){

        $users = DB::table('users')->get();

        return view('admindashboard.libralian', compact('users'));
    }

    public function newLibrianManager(Request $request){

        $data = request() -> all();

        $id= $data['userId'];

        $user = User::find($id);

        $user->userable_type = 'App\\Models\\SuperAdmin';

        $user->update();

        return redirect()->back()->with('success','libralian  created successfully!');


    }

    public function registerBook(Request $request){
       
        $book = new Book;   

        $data = request() -> all();

        $image=$request->file('img_src');

        $re_image=time().'.'.$image->getClientOriginalExtension();

        $dest=public_path('/img');

        $image->move($dest,$re_image);
        
        $book->img_src=$re_image;

        $book->title = $data['title'];

        $book->author = $data['author'];

        $book-> publisher= $data['publisher'];

        $book-> bookNumber= $data['bookNumber'];

        $book->description=$data['description'];       

        $book->save(); 
        
        return redirect()->back()->with('success','Book  created successfully!');
    
        
    }

    public function getAllBook(Request $request){
       
       $books = DB::table('books')->get();


       return view('welcome', compact('books'));    
        
    }
}
