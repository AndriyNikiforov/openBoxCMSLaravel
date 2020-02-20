<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BugReport extends Model
{
    protected $table = 'bug_reports';
    protected $fillable = [
        'title', 'description', 'text', 'priority_id'
    ];

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }

    public function priorities()
    {
        return $this->hasOne('App\Models\Priority');
    }
}
