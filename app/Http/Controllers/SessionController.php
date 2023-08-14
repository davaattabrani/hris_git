<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib Diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'project_manager'){
                return redirect('dashboard/project-manager');
            }elseif(Auth::user()->role == 'system_analys'){
                return redirect('dashboard/system-analyst');
            }elseif(Auth::user()->role == 'uiux_designer'){
                return redirect('dashboard/uiui-designer');
            }elseif(Auth::user()->role == 'qa'){
                return redirect('dashboard/quality-assurance');
            }elseif(Auth::user()->role == 'programmer'){
                return redirect('dashboard/programmer');
            }
        }else{
            return redirect('')->withErrors('Email dan Password salah')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
