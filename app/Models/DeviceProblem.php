<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceProblem extends Model
{
    protected $table = 'device_problems';
    protected $fillable = [
        'title', 'description', 'resolve',
        'date_founded', 'device_id', 'user_id'
    ];

    public function devices()
    {
        return $this->hasOne('App\Models\Device');
    }
}
