<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticInformation extends Model
{
    protected $table = 'static_informations';
    protected $fillable = ['title', 'text'];
}
