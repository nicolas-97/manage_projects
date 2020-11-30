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

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start',
        'finish'
    ];

    public function backlog(){
        return $this->belongsTo('App\Models\Backlog');
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }
}
