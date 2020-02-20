<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $table = 'boards';
    protected $fillable = ['title', 'project_id'];

    public function projects()
    {
        return $this->hasOne('App\Models\Project');
    }

    public function boardColumns()
    {
        return $this->belongsTo('App\Models\BoardColumn');
    }
}
