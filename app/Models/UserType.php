<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types';
    protected $fillable = [
        'name', 'permissions'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
