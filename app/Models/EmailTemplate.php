<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $table = 'emails_templates';
    protected $fillable = ['title', 'text'];
}