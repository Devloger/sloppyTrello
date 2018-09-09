<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];
    
    public function tasks()
    {
        return $this->hasMany(Task::class)->whereFinished(0);
    }
}
