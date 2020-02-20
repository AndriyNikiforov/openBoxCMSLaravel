<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityError extends Model
{
    protected $table = 'title';
    protected $fillable = [
        'title', 'text', ' score', 'type', 'user_id'
    ];

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
