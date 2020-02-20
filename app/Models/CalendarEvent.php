<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarEvent extends Model
{
    protected $table = 'calendar_events';
    protected $fillable = [
        'title', 'description', 'date_alert', 'user_id'
    ];

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
