<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectComment extends Model
{
    protected $table = 'project_comments';
    protected $fillable = [
        'text', 'user_id', 'project_id'
    ];

    public function projects()
    {
        return $this->hasOne('App\Models\Project');
    }
}
