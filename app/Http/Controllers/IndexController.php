<?php

namespace App\Http\Controllers;

use App\Exceptions\WrongInputsException;

class IndexController extends Controller
{
	public function index()
	{
        return view('index.index');
	}
	public function login()
	{
		return view('index.login');
	}
	public function register()
	{
		return view('index.register');
	}
}
