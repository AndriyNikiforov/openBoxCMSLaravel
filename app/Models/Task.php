<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['user_id', 'title', 'text'];

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
