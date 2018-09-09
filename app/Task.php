<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    
    public function finish()
    {
        $this->update(['finished' => 1]);
    }
    
    public function collaborators()
    {
        return $this->hasMany(Collaborator::class)->where('task_id', $this->id);
    }
    
    public function notCollaborators()
    {
        $users = User::all();
    
        $users = $users->filter(function ($value, $key) {
            return $value->notCollaboratesTo($this);
        });
        
        return $users;
    }
}
