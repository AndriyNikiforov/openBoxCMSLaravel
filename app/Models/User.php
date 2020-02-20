<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];

    public function bugReports()
    {
        return $this->belongsTo('App\Models\BugReport');
    }

    public function tasks()
    {
        return $this->belongsTo('App\Models\Task');
    }

    public function calendarEvents()
    {
        return $this->belongsTo('App\Models\CalendarEvent');
    }

    public function securityErrors()
    {
        return $this->belongsTo('App\Models\SecurityError');
    }

    public function boardColumnRows()
    {
        return $this->belongsTo('App\Models\BoardColumnRow');
    }

    public function subscriptions()
    {
        return $this->belongsTo('App\Models\Subscription');
    }

    public function projectComments()
    {
        return $this->belongsTo('App\Models\ProjectComment');
    }

    public function deviceProblems()
    {
        return $this->belongsTo('App\Models\DeviceProblem');
    }
}
