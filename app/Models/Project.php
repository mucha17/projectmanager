<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'author',
        'start_date',
        'finish_date',
        'short_description',
        'long_description'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'start_date' => 'datetime',
        'finish_date' => 'datetime',
    ];

    public function getStartDateAttribute($value) {
        if($value == null) {
            return null;
        } else {
            return Carbon::parse($value)->format('d-m-Y');
        }
    }
    public function getFinishDateAttribute($value) {
        if($value == null) {
            return null;
        } else {
            return Carbon::parse($value)->format('d-m-Y');
        }
    }
}
