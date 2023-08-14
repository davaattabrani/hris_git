<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanController extends Controller
{
    //
    function index(){
        return view('dashboard');
    }
    function pm(){
        return view('dashboard');
    }
    function sa(){
        echo "Halo selamat datang di halaman system analyst";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function uiux(){
        echo "Halo selamat datang di halaman ui/ux designer";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function qa(){
        echo "Halo selamat datang di halaman Quality Assurance";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function programmer(){
        echo "Halo selamat datang di halaman Programmer";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
}