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
        'finish',
        'company_id'
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


    public function company(){
        return $this->belongsTo('App\Models\Company');
    }

    public function backlog(){
        return $this->hasOne('App\Models\Backlog');
    }
}
