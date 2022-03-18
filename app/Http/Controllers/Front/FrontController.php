<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book ;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }
   
    public function about(){
        return view('front.aboutus');
    }
    public function web(){
        return view('front.web');
    }
    public function contactus(){
        return view('front.contactus');
    }

    public function bookshop(){
        $books=Book::take(3)->get();
        return view('front.bookshop',compact('books'));
    }
    public function data(){
        return view('front.data');
    }
    public function mobile(){
        return view('front.mobile');
    }

    public function login_user(){
        
        return view('front.login');
        $user=User::where('email',$request->email)->first();
        
    }

 
    
        public function register_user(Request $request){

        
          return view('front.register');  

    }

    public function reset(){
        return view('front.reset');
    }
  
}
