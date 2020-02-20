<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title', 'description', 'founder_id'
    ];

    public function testCases()
    {
        return $this->belongsTo('App\Models\TestCase');
    }

    public function boards()
    {
        return $this->hasOne('App\Models\Priority');
    }

    public function projectComments()
    {
        return $this->belongsTo('App\Models\ProjectComment');
    }
}
