<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function unfinishedTasks()
    {
        return $this->hasMany(Task::class)->whereFinished(1);
    }
}
