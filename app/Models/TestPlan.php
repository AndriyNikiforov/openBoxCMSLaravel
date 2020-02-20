<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestPlan extends Model
{
    protected $table = 'test_plan';
    protected $fillable = ['index', 'test_case_id'];

    public function testCases()
    {
        return $this->belongsTo('App\Models\TestCase');
    }
}
