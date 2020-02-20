<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHasType extends Model
{
    protected $table = 'user_has_types';
    protected $fillable = [
        'user_id', 'type_id'
    ];
}
