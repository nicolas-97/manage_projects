<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'finish',
        'backlog_id',
    ];

    public function backlog(){
        return $this->belongsTo('App\Models\Backlog');
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }
}
