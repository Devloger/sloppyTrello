<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
	{
	    $boards = auth()->user()->boards();
		return view('logged.main', compact('boards'));
	}
	
	public function logout()
    {
        Auth::logout();
        
        return redirect('/');
    }
}
