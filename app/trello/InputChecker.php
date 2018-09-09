<?php

namespace App\trello;

use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class InputChecker
{
    
    public static function check(...$inputs)
    {
        if (! Request::has($inputs)) {
            throw new BadRequestHttpException;
        }
    }
}