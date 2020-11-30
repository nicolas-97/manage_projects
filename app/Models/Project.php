<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start',
        'finish'
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function backlog(){
        return $this->belongsTo('App\Models\Backlog');
    }
}
