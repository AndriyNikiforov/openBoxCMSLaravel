<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $fillable = ['name', 'type'];

    public function testCases()
    {
        return $this->belongsTo('App\Models\TestCase');
    }
}
