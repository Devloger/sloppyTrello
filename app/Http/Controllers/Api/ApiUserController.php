<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\trello\InputChecker;
use App\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    
    use Helpers;
    
    public function store(Request $request)
    {
        InputChecker::check('name', 'email', 'password');
        
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return $this->response->created();
    }
}