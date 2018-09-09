<?php

namespace App\Http\Controllers\Api;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiTaskController extends Controller
{
    public function index(Page $page)
    {
        return $page->tasks;
    }
}
