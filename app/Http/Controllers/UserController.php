<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('logged.userShow', compact('user'));
    }
    public function edit(User $user)
    {
        return view('logged.userEdit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $user->update(['name' => $request->name]);
        
        return back();
    }
}
