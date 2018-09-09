<?php

namespace App\Http\Controllers\Api;

use App\Board;
use App\Board_User;
use App\User;
use Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiBoardController extends Controller
{
    public function index(User $user)
    {
        Auth::login($user);
        return $user->boards();
    }
    
    public function store()
    {
        $board = Board::create([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => request('id'),
        ]);
        Board_User::create([
            'board_id' => $board->id,
            'user_id' => request('id'),
            'admin' => 1,
        ]);
        
        return $board;
    }
    
    public function destroy(Board $board)
    {
        $board->delete();
        
        return Response::json('Deleted.');
    }
}
