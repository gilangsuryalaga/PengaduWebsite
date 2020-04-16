<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PetugasLoginController extends Controller
{
     public function __construct(){
        $this->middleware('guest:petugas');
    }

    public function showLoginForm(){

        return view('auth.petugas-login');
    }

    public function login(Request $request){

        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //attempt log in
        if (Auth::guard('petugas')->attempt(['email'=> $request->email, 'password'=> $request->password], $request->remember)) {
            //if success
            return redirect()->intended(route('petugas.dashboard'));
        }else{
            return redirect()->back()->withInput($request->only('email'));
        }
    }
}
