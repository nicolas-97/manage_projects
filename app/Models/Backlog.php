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
        return $this->hasOne('App\Models\Project');
    }

    public function sprints(){
        return $this->hasMany('App\Models\Sprint');
    }
}
