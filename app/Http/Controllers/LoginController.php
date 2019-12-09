<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verify(Request $req){
		//$users = User::all();
		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->first();
					
		if(count($user) > '0' ){
           if($user->type == 0){
                return redirect('/admin');
            }
            if($user->type == '1'){
                return redirect('/author');
            } 
	
			$req->session()->put('name', $req->input('username'));
			//$req->session()->put('user', $user->type);
			//$req->session()->put('user', $user[0]->type);
			$req->session()->put('user', $user);
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			//return view('login.index');
			return redirect('/login');
		}
	}
}
