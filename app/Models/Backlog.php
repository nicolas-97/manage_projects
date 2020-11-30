<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
    ];

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function sprints(){
        return $this->hasMany('App\Models\Sprint');
    }

    public function tasks(){
        return $this->hasManyThrough('App\Models\Task','App\Models\Sprint');
    }
}
