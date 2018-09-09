<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\trello\Auther;
use App\trello\InputChecker;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    
    use Helpers;
    
    public function login(Request $request)
    {
        InputChecker::check('email', 'password');
        
        if ($potentialUser = Auther::check($request->email, $request->password)) {
            return $potentialUser;
        }
        
        $this->response->errorBadRequest();
    }
}
