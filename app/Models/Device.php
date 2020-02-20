<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices';
    protected $fillable = ['type', 'name', 'os'];

    public function deviceProblem()
    {
        return $this->belongsTo('App\Models\DeviceProblem');
    }
}
