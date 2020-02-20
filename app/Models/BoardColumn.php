<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardColumn extends Model
{
    protected $table = 'board_columns';
    protected $fillable = ['title', 'board_id'];

    public function boards()
    {
        return $this->hasOne('App\Models\Board');
    }

    public function boardColumnRows()
    {
        return $this->belongsTo('App\Models\BoardColumnRow');
    }
}
