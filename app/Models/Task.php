<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany('App\Models\TaskDetail');
    }
}
