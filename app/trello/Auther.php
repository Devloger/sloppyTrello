<?php

namespace App\trello;

use App\User;
use Illuminate\Support\Facades\Hash;

class Auther
{
    
    public static function check($email, $password)
    {
        $potentialUser = User::where('email', $email)->first();
        if ($potentialUser AND Hash::check($password, $potentialUser->password)) {
            return $potentialUser;
        }
        
        return false;
    }
}