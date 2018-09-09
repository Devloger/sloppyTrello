<?php

namespace App\Http\Controllers\Api;

use App\Board;
use App\Page;
use App\User;
use Dingo\Api\Auth\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class ApiPageController extends Controller
{
    public function index(Board $board)
    {
        return $board->pages;
    }
    
    public function store(Request $request)
    {
        $page = Page::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'board_id' => $request->board_id,
        ]);
    
        return $page;
    }
    
    public function delete(Page $page)
    {
        $page->delete();
    
        return Response::json('Deleted.');
    }
}
