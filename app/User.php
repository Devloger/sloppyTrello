<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function boards()
    {
        $participatesIn = Board_User::where('user_id', auth()->user()->id)->get();
        return Board::whereIn('id', $participatesIn->pluck('board_id'))->get();
    }
    
    public function collaboratesTo($task)
    {
        return Collaborator::where('task_id', $task->id)->where('user_id', $this->id)->first();
    }
    
    public function notCollaboratesTo($task)
    {
        return Collaborator::where('task_id', $task->id)->where('user_id', '!=', $this->id)->first();
    }
}
