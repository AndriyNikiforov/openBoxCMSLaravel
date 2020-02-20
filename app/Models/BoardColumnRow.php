<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoardColumnRow extends Model
{
    protected $table = 'board_column_rows';
    protected $fillable = ['title', 'board_id'];

    public function boardColumns()
    {
        return $this->hasOne('App\Models\BoardColumn');
    }

    public function users()
    {
        return $this->hasOne('App\Models\User');
    }
}
