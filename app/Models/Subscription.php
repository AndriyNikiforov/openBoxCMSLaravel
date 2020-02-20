<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table = 'subscriptions';
    protected $fillable = ['email', 'user_id', 'options'];

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
