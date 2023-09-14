<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    public function login(){
        return view('site.login.index');
    }
    public function loginPost(Request $request){
        $credetials = [
            'name' =>$request->name,
            'password'=>$request->password
        ];

        if(Auth::attempt($credetials)){
            return redirect('/home')->with('Success', 'Login Success');
        }

        return back()->with('error', 'Name or Password wrong');
    }

    public function register(){
        return view('site.register.index');
    }

    public function registerPost(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Registro com Sucesso');
    }

    public function logout(){

        Auth::logout();

        return redirect()->route('login');
    }
}
