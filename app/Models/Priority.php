<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table = 'priorities';
    protected $fillable = ['name', 'index'];

    public function testCases()
    {
        return $this->belongsTo('App\Models\TestCase');
    }

    public function bugReports()
    {
        return $this->belongsTo('App\Models\BugReport');
    }
}
