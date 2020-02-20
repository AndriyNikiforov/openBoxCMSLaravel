<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestCase extends Model
{
    protected $table = 'test_cases';
    protected $fillable = [
        'description', 'status_id', 'project_id', 'steps', 'priority_id'
    ];

    public function testPlans()
    {
        return $this->hasOne('App\Models\TestPlan');
    }

    public function projects()
    {
        return $this->hasOne('App\Models\Project');
    }
}
